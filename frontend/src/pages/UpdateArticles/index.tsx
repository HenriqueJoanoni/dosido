import React, { useState, useEffect } from "react";
import { Input, Tag, Select } from "antd";
import { useNavigate, useParams } from "react-router-dom";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import NavBar from "../../components/NavBar";
import { AuthCard, Label, AuthButton, Message, FormContainer } from "./styles";

const predefinedTags = ["Technology", "Health", "Science", "Education", "Sports", "Entertainment"];

function UpdateArticle() {
  const { id } = useParams();
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");
  const [imageUrl, setImageUrl] = useState("");
  const [tags, setTags] = useState<string[]>([]);
  const [tagInput, setTagInput] = useState("");
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);
  const navigate = useNavigate();

  useEffect(() => {
    const fetchArticle = async () => {
      try {
        const response = await axiosInstance.get(`/articles/${id}`);
        setTitle(response.data.title);
        setContent(response.data.content);
        setImageUrl(response.data.imageUrl);
        setTags(response.data.tags || []);
      } catch (err) {
        setError("Failed to fetch article data.");
      }
    };
    fetchArticle();
  }, [id]);

  const handleAddTag = () => {
    if (tagInput && !tags.includes(tagInput)) {
      setTags([...tags, tagInput]);
      setTagInput("");
    }
  };

  const handleRemoveTag = (removedTag: string) => {
    setTags(tags.filter(tag => tag !== removedTag));
  };

  const handleSelectTag = (value: string) => {
    if (!tags.includes(value)) {
      setTags([...tags, value]);
    }
  };

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setError("");

    if (!title || !content) {
      setError("Title and content are required.");
      return;
    }

    const articleData = {
      title,
      content,
      imageUrl,
      tags,
    };

    setLoading(true);
    try {
      await axiosInstance.put(`/articles/${id}`, articleData);
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
              <Label>Image URL</Label>
              <Input type="text" value={imageUrl} onChange={(e) => setImageUrl(e.target.value)} placeholder="Enter image URL" />
            </div>
            <div>
              <Label>Tags</Label>
              <Input
                type="text"
                value={tagInput}
                onChange={(e) => setTagInput(e.target.value)}
                onPressEnter={handleAddTag}
                placeholder="Add a tag and press Enter"
              />
              <Select
                style={{ width: "100%", marginTop: "10px" }}
                placeholder="Select a tag"
                onChange={handleSelectTag}
              >
                {predefinedTags.map(tag => (
                  <Select.Option key={tag} value={tag}>{tag}</Select.Option>
                ))}
              </Select>
              <div style={{ marginTop: "10px" }}>
                {tags.map((tag) => (
                  <Tag key={tag} closable onClose={() => handleRemoveTag(tag)}>
                    {tag}
                  </Tag>
                ))}
              </div>
            </div>
            <AuthButton disabled={loading}>{loading ? "Updating..." : "Update Article"}</AuthButton>
          </FormContainer>
        </AuthCard>
      </div>
    </Container>
  );
}

export default UpdateArticle;
