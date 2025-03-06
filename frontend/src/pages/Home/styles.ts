import styled from "styled-components";
import { colorPrimary } from "../../constants/theme";
import { Divider, Flex, Typography } from "antd";

export const Container = styled.div`
  background-color: ${colorPrimary};
  height: 100vh;
  display: flex;
  flex-direction: column;
`;

export const ScrollStyled = styled.div`
  overflow-y: auto;
`;

export const ListContainer = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  padding: 20px;
  padding-top: 0px;
`;

export const PreviewContentContainer = styled(Flex)`
  flex-direction: column;
  padding: 0 20px;
  padding-top: 10px;

  h5 {
    margin: 0px;
  }
`;

export const ImageStyled = styled.img`
  width: 100%;
  object-fit: cover;
  height: 200px;
`;

export const DividerStyled = styled(Divider)`
  margin-left: 20px;
  margin-right: 20px;
  width: calc(100% - 40px);
  min-width: calc(100% - 40px);
`;

export const DateStyled = styled(Typography.Title)`
  margin-top: 0px;
  margin-left: 20px;
`;

export const PreviewArticleContainer = styled.div`
  cursor: pointer;
`;
