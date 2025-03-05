import React, { useState } from "react";
import { Input, Button } from "antd";
import { Link } from "react-router-dom";
import { axiosInstance } from "../../api";
import { Container } from "../Home/styles";
import { LoginCard, Label, LoginButton, AuthLink, Message, FormContainer } from "./styles";

function Login() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setError("");

    if (!email.includes("@") || password.length < 6) {
      setError("Invalid email or password.");
      return;
    }

    console.log("Login successful");
    axiosInstance.post("/login", { email, password });
  };

  return (
    <Container>
      <div style={{ paddingTop: '100px' }}>
        <LoginCard>
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
            <LoginButton>
              <Link to="/">Log in</Link>
              
            </LoginButton>
          </FormContainer>
          <AuthLink>
            <Link to="/register">Don't have an account? Register</Link>
          </AuthLink>
        </LoginCard>
      </div>
    </Container>
  );
}

export default Login;
