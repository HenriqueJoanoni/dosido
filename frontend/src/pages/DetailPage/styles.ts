import styled from "styled-components";
import { colorPrimary } from "../../constants/theme";
import { Divider, Flex, Typography } from "antd";

export const Container = styled.div`
  min-height: 100vh;
  background-color: ${colorPrimary};
`;

export const ImageStyled = styled.img`
  width: 100%;
  object-fit: cover;
  height: 200px;
`;
