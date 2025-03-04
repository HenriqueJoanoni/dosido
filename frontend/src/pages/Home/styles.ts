import { Card, Flex } from "antd";
import styled from "styled-components";
import { colorPrimary } from "../../constants/theme";

export const Container = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  background-color: ${colorPrimary};
  padding: 20px;
`;
