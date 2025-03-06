import styled from "styled-components";
import { Button } from "antd";

export const AuthCard = styled.div`

  max-width: 400px;
  margin: auto;
  padding: 2rem;
  border-radius: 12px;
  background: #fff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;

  @media (max-width: 480px) {
    padding: 1.5rem;
    border-radius: 8px;
    margin: 10px;
  }
`;

export const Label = styled.label`
  display: block;
  text-align: left;
  font-weight: bold;
  margin-bottom: 0.5rem;
  font-size: 1rem;

  @media (max-width: 480px) {
    font-size: 0.9rem;
  }
`;

export const FormContainer = styled.form`
  display: flex;
  flex-direction: column;
  gap: 1rem;
`;

export const AuthButton = styled(Button)`
  width: 100%;
  background: #1B1749;
  color: white;
  padding: 10px;
  font-size: 1rem;
  border-radius: 8px;

  &:hover {
    background: #40a9ff;
  }

  @media (max-width: 480px) {
    font-size: 0.9rem;
    padding: 8px;
  }
`;

export const Message = styled.p`
  color: red;
  font-size: 0.9rem;
  text-align: center;

  @media (max-width: 480px) {
    font-size: 0.85rem;
  }
`;
