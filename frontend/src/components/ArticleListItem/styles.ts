import { Card, Flex } from "antd";
import styled from "styled-components";

export const CardStyled = styled(Card)`
  .ant-card-cover img {
    max-height: 150px;
    object-fit: cover;
  }
`;

export const DateStyled = styled.span`
  color: #5f5f6f;
  font-size: 10px;
`;
