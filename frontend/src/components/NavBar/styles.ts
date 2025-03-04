import { Flex, Input } from "antd";
import styled from "styled-components";
import { colorPrimary } from "../../constants/theme";

const { Search } = Input;

export const Container = styled(Flex)`
  justify-content: space-between;
  align-items: center;
  background-color: ${colorPrimary};
  padding: 10px 20px;
  gap: 10px;

  a {
    height: 25px;
  }
`;

export const LogoStyled = styled.img`
  height: 100%;
  object-fit: contain;
`;

export const IconsContainer = styled(Flex)`
  gap: 10px;
  min-width: 50px;

  img {
    cursor: pointer;
  }
`;

export const SearchStyled = styled(Search)<{ $expanded: boolean }>`
  opacity: ${({ $expanded }) => ($expanded ? 1 : 0)};
  max-width: ${({ $expanded }) => ($expanded ? "300px" : "0px")};
  transform: ${({ $expanded }) => ($expanded ? "scaleX(1)" : "scaleX(0.8)")};
  transition: opacity 0.3s ease, max-width 0.3s ease, transform 0.3s ease;
  overflow: hidden;
`;
