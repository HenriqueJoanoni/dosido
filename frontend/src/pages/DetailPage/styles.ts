import styled from "styled-components";
import { colorPrimary } from "../../constants/theme";
import { Typography } from "antd";

export const Container = styled.div`
  background-color: ${colorPrimary};
  position: relative;
  height: 100vh;
  display: flex;
  flex-direction: column;
`;

export const ScrollStyled = styled.div`
  overflow-y: auto;
`;

export const ImageStyled = styled.img`
  width: 100%;
  object-fit: cover;
  height: 200px;
`;

export const ContentContainer = styled.div`
  padding: 20px;

  h5 {
    margin-top: 0px;
    margin-bottom: 20px;
  }

  img {
    width: 100%;
    object-fit: cover;
    height: 200px;
  }
`;

export const Description = styled(Typography)<{ $limitArticle: boolean }>`
  ${({ $limitArticle }) =>
    $limitArticle
      ? `
  
  display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  `
      : ""}
`;

export const AuthContainer = styled.div`
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 300px;
  background-color: white;
  padding: 20px;
  text-align: center;

  &:after {
    margin-top: -200px;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: linear-gradient(
      to top,
      rgba(255, 255, 255, 1),
      rgba(255, 255, 255, 0)
    );
  }

  button {
    margin-top: 20px;
  }
`;
