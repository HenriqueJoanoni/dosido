import React, { useState } from "react";
import { Input, Button } from "antd";
import { Link } from "react-router-dom";
import { axiosInstance } from "../../api";

function Login() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setError("");
    // Vérification basique, tu peux adapter ici
    if (!email.includes("@") || password.length < 6) {
      setError("Invalid email or password.");
      return;
    }
    // Ajoute ici la logique pour envoyer les données de login
    console.log("Login successful");
    axiosInstance.post("/login",{email, password})
  };

  return (
    <div style={{ maxWidth: "400px", margin: "auto", padding: "20px" }}>
      <h2>Login</h2>
      {error && <p style={{ color: "red" }}>{error}</p>}
      <form onSubmit={handleSubmit}>
        <div>
          <label>Email</label>
          <Input
            type="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
            required
          />
        </div>
        <div>
          <label>Password</label>
          <Input.Password
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            required
          />
        </div>
        <Button type="primary" htmlType="submit" block>
          Log In
        </Button>
      </form>
      <div style={{ marginTop: "10px" }}>
        <Link to="/register">Don't have an account? Register</Link>
      </div>
    </div>
  );
}

export default Login;
