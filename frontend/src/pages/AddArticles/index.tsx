import React, { useState, useEffect } from "react";
import { Input, Tag, Select, Checkbox } from "antd";
import { useNavigate } from "react-router-dom";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import NavBar from "../../components/NavBar";
import { AuthCard, Label, AuthButton, Message, FormContainer } from "./styles";

function AddArticle() {
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");
  const [imageUrl, setImageUrl] = useState("");
  const [tags, setTags] = useState<string[]>([]);
  const [tagInput, setTagInput] = useState("");
  const [error, setError] = useState("");
  const [premium, setPremium] = useState(false);
  const [loading, setLoading] = useState(false);
  const [fetchedTags, setFetchedTags] = useState<{ id: number; name: string }[]>([]);
  const navigate = useNavigate();

  useEffect(() => {
    const fetchTags = async () => {
      try {
        const response = await axiosInstance.get("/categories");
        setFetchedTags(response.data);
      } catch (error) {
        console.error("Error fetching tags:", error);
      }
    };

    fetchTags();
  }, []);

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

    try {
      setLoading(true);
      const categoryPromises = tags.map(async (tagName) => {
        const existingTag = fetchedTags.find(t => t.name === tagName);
        if (existingTag) {
          return existingTag.id;
        } else {
          const response = await axiosInstance.post("/category-create", {
            name: tagName
          });
          return response.data.id;
        }
      });

      const categoryIds = await Promise.all(categoryPromises);

      const articleData = {
        title: title,
        description: content,
        image: imageUrl,
        categories: categoryIds,
        premium: premium ? 1 : 0,
      };

      const response = await axiosInstance.post("/article-create", articleData);
      console.log("Article added:", response.data);
      navigate("/");
    } catch (err: any) {
      console.error("Error:", err);
      setError(err.response?.data?.message || "Failed to add article. Please try again.");
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
                <Label>Premium</Label>
                <Checkbox onChange={(e)=> setPremium(!premium)} checked={premium} />
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
                {fetchedTags.map(tag => (
                    <Select.Option key={tag.id} value={tag.name}>
                      {tag.name}
                    </Select.Option>
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
            <AuthButton disabled={loading} type="submit">{loading ? "Adding..." : "Add Article"}</AuthButton>
          </FormContainer>
        </AuthCard>
      </div>
    </Container>
  );
}

export default AddArticle;
