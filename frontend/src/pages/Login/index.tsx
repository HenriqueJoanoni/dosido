// Login.tsx
import React, { useState } from "react";
import { Input } from "antd";
import { Link, useNavigate, useSearchParams } from "react-router-dom";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import NavBar from "../../components/NavBar";
import {
  Label,
  AuthLink,
  Message,
  FormContainer,
  AuthCard,
  AuthButton,
} from "./styles";
import { useCookies } from "react-cookie";

function Login() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const navigate = useNavigate();
  const [cookies, setCookie] = useCookies(["mycookie"]);
  const [searchParams] = useSearchParams();
  const articleId = searchParams.get("article");

  async function handleSubmit(e: React.FormEvent<HTMLFormElement>) {
    e.preventDefault();
    setError("");
    if (!email.includes("@") || password.length < 6) {
      setError("Invalid email or password.");
      return;
    }
    axiosInstance
      .post("/login", { email, password })
      .then(({ data }) => {
        setCookie("mycookie", { token: data.access_token }, { path: "/" });
        if (articleId) navigate(`/${articleId}`);
        else navigate("/");
      })
      .catch(() => setError("Invalid email or password."));
  }

  return (
    <Container>
      <NavBar />
      <div style={{ paddingTop: "100px" }}>
        <AuthCard>
          <h2>Login</h2>
          {error && <Message type="error">{error}</Message>}
          <FormContainer onSubmit={handleSubmit}>
            <div>
              <Label>Email</Label>
              <Input
                type="email"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                required
              />
            </div>
            <div>
              <Label>Password</Label>
              <Input.Password
                value={password}
                onChange={(e) => setPassword(e.target.value)}
                required
              />
            </div>
            <AuthButton type="submit">Log in</AuthButton>
          </FormContainer>
          <AuthLink>
            <Link to="/register">Don't have an account? Register</Link>
          </AuthLink>
        </AuthCard>
      </div>
    </Container>
  );
}

export default Login;
