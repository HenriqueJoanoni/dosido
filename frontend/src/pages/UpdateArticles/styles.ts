import styled from "styled-components";
import { Button } from "antd";

export const AuthCard = styled.div`
  width: 90%;
  max-width: 450px;
  margin: auto;
  padding: 2rem;
  border-radius: 12px;
  background: #fff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;

  @media (max-width: 480px) {
    padding: 1.5rem;
    border-radius: 8px;
  }
`;

export const Label = styled.label`
  display: block;
  text-align: left;
  font-weight: bold;
  margin-bottom: 0.5rem;
  font-size: 1rem;
  color: #333;

  @media (max-width: 480px) {
    font-size: 0.9rem;
  }
`;

export const FormContainer = styled.form`
  display: flex;
  flex-direction: column;
  gap: 1rem;
  width: 100%;
`;

export const AuthButton = styled(Button)`
  width: 100%;
  background: #1890ff;
  color: white;
  padding: 12px;
  font-size: 1rem;
  border-radius: 8px;
  font-weight: bold;
  transition: background 0.3s ease;

  &:hover {
    background: #40a9ff;
  }

  @media (max-width: 480px) {
    font-size: 0.9rem;
    padding: 10px;
  }
`;

export const Message = styled.p`
  color: red;
  font-size: 0.9rem;
  text-align: center;
  margin-bottom: 1rem;

  @media (max-width: 480px) {
    font-size: 0.85rem;
  }
`;

export const InputWrapper = styled.div`
  width: 100%;
  text-align: left;
`;

export const InputStyled = styled.input`
  width: 100%;
  padding: 10px;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 6px;

  &:focus {
    outline: none;
    border-color: #1890ff;
  }

  @media (max-width: 480px) {
    font-size: 0.9rem;
    padding: 8px;
  }
`;
