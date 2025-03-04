import { useState } from "react";
import { Input, Card } from "antd";
import { Link } from "react-router-dom";
import {
  LoginCard,
  Label,
  Message,
  LoginButton,
  FormContainer,
  AuthLink,
} from "./styles"; // Import des styles de Login

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

    console.log("Logging in with:", email, password);
  };

  return (
    <LoginCard title="Login">
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
        <LoginButton type="submit">Login</LoginButton>
      </FormContainer>

      <AuthLink>
        Not registered yet? <Link to="/register">Sign up</Link>
      </AuthLink>
    </LoginCard>
  );
}

export default Login;
