// styles.ts
import styled from "styled-components";
import { Card } from "antd";

export const AuthCard = styled(Card)`
  width: 100%;
  max-width: 400px;
  margin: auto;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

  @media (max-width: 480px) {
    max-width: 90%;
    margin: auto;
    padding: 35px;
  }
`;

export const Label = styled.label`
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 8px;
  display: block;
`;

export const Message = styled.p<{ type: "success" | "error" }>`
  color: ${({ type }) => (type === "success" ? "green" : "red")};
  text-align: center;
  font-size: 14px;
  padding: 10px;
  border-radius: 5px;
  background: ${({ type }) => (type === "success" ? "#e6ffed" : "#ffe6e6")};
`;

export const AuthButton = styled.button`
  width: 100%;
  padding: 12px;
  background-color: #1B1749;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  cursor: pointer;

  &:hover {
    background-color: #40a9ff;
  }
`;

export const FormContainer = styled.form`
  display: flex;
  flex-direction: column;
  gap: 18px;
  padding: 10px;
`;

export const AuthLink = styled.p`
  text-align: center;
  font-size: 14px;
  margin-top: 10px;

  a {
    color: #1B1749;
    font-weight: bold;
    text-decoration: none;

    &:hover {
      text-decoration: underline;
    }
  }
`;