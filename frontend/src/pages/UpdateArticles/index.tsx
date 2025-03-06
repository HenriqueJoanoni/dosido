import React, { useState, useEffect } from "react";
import { Input } from "antd";
import { useNavigate, useParams } from "react-router-dom";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import NavBar from "../../components/NavBar";
import { AuthCard, Label, AuthButton, Message, FormContainer } from "./styles";

function UpdateArticle() {
  const { id } = useParams(); 
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");
  const [image, setImage] = useState<File | null>(null);
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);
  const navigate = useNavigate();


  useEffect(() => {
    const fetchArticle = async () => {
      try {
        const response = await axiosInstance.get(`/articles/${id}`);
        setTitle(response.data.title);
        setContent(response.data.content);
      } catch (err) {
        setError("Failed to fetch article data.");
      }
    };
    fetchArticle();
  }, [id]);

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setError("");

    if (!title || !content) {
      setError("Title and content are required.");
      return;
    }

    const formData = new FormData();
    formData.append("title", title);
    formData.append("content", content);
    if (image) {
      formData.append("image", image);
    }

    setLoading(true);
    try {
      await axiosInstance.put(`/articles/${id}`, formData, {
        headers: { "Content-Type": "multipart/form-data" },
      });

      navigate("/articles"); 
    } catch (err) {
      setError("Failed to update article. Please try again.");
    } finally {
      setLoading(false);
    }
  };

  return (
    <Container>
      <NavBar />
      <div style={{ paddingTop: "100px" }}>
        <AuthCard>
          <h2>Update Article</h2>
          {error && <Message>{error}</Message>}
          <FormContainer onSubmit={handleSubmit}>
            <div>
              <Label>Title</Label>
              <Input type="text" value={title} onChange={(e) => setTitle(e.target.value)} required />
            </div>
            <div>
              <Label>Content</Label>
              <Input.TextArea value={content} onChange={(e) => setContent(e.target.value)} required />
            </div>
            <div>
              <Label>Image (Optional)</Label>
              <Input type="file" accept="image/*" onChange={(e) => setImage(e.target.files?.[0] || null)} />
            </div>
            <AuthButton  disabled={loading}>{loading ? "Updating..." : "Update Article"}</AuthButton>
          </FormContainer>
        </AuthCard>
      </div>
    </Container>
  );
}

export default UpdateArticle;
