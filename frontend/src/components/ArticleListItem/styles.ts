import { Card, Flex } from "antd";
import styled from "styled-components";

export const CardStyled = styled(Card)`
  .ant-card-cover img {
    max-height: 150px;
    object-fit: cover;
  }

  .ant-card-meta-description {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
`;

export const DateStyled = styled.span`
  color: #5f5f6f;
  font-size: 10px;
`;
