import React, { useState } from "react";
import { Input } from "antd";
import { useNavigate } from "react-router-dom";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import NavBar from "../../components/NavBar";
import { AuthCard, Label, AuthButton, Message, FormContainer } from "./styles";

function AddArticle() {
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");
  const [image, setImage] = useState<File | null>(null);
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);
  const navigate = useNavigate();

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
      const response = await axiosInstance.post("/articles", formData, {
        headers: { "Content-Type": "multipart/form-data" },
      });

      console.log("Article added:", response.data);
      navigate("/articles"); // Redirection vers la liste des articles
    } catch (err: any) {
      console.error("Error:", err);
      setError("Failed to add article. Please try again.");
    } finally {
      setLoading(false);
    }
  };

  return (
    <Container>
      <NavBar />
      <div style={{ paddingTop: "100px" }}>
        <AuthCard>
          <h2>Add an Article</h2>
          {error && <Message >{error}</Message>}
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
              <Label>Image</Label>
              <Input type="file" accept="image/*" onChange={(e) => setImage(e.target.files?.[0] || null)} />
            </div>
            <AuthButton  disabled={loading}>{loading ? "Adding..." : "Add Article"}</AuthButton>
          </FormContainer>
        </AuthCard>
      </div>
    </Container>
  );
}

export default AddArticle;
