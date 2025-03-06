import React, { useState } from "react";
import { Input } from "antd";
import { Link, useNavigate } from "react-router-dom";
import { useCookies } from "react-cookie";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import NavBar from "../../components/NavBar";
import { AuthCard, Label, AuthButton, AuthLink, Message, FormContainer } from "./styles";

function Register() {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);
  const navigate = useNavigate();
  const [cookies, setCookie] = useCookies(["mycookie"]);

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setError("");
    if (!email.includes("@") || password.length < 6) {
      setError("Invalid email or password.");
      return;
    }
    if (password !== confirmPassword) {
      setError("Passwords do not match.");
      return;
    }
    setLoading(true);
    try {
      const response = await axiosInstance.post("/register", { name, email, password });
      setCookie("mycookie", { name, token: response.data.access_token }, { path: "/" });
      navigate("/");
    } catch (err) {
      setError("Registration failed. Please try again.");
    } finally {
      setLoading(false);
    }
  };

  return (
    <Container>
      <NavBar />
      <div style={{ paddingTop: "100px" }}>
        <AuthCard>
          <h2>Register</h2>
          {error && <Message type="error">{error}</Message>}
          <FormContainer onSubmit={handleSubmit}>
            <div>
              <Label>Name</Label>
              <Input type="text" value={name} onChange={(e) => setName(e.target.value)} required />
            </div>
            <div>
              <Label>Email</Label>
              <Input type="email" value={email} onChange={(e) => setEmail(e.target.value)} required />
            </div>
            <div>
              <Label>Password</Label>
              <Input.Password value={password} onChange={(e) => setPassword(e.target.value)} required />
            </div>
            <div>
              <Label>Confirm Password</Label>
              <Input.Password value={confirmPassword} onChange={(e) => setConfirmPassword(e.target.value)} required />
            </div>
            <AuthButton type="submit" disabled={loading}>{loading ? "Registering..." : "Register"}</AuthButton>
          </FormContainer>
          <AuthLink>
            <Link to="/login">Already have an account? Log in</Link>
          </AuthLink>
        </AuthCard>
      </div>
    </Container>
  );
}

export default Register;
