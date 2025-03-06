import styled from "styled-components";
import { colorPrimary } from "../../constants/theme";

export const Container = styled.div`
  background-color: ${colorPrimary};
  position: relative;
  height: 100vh;
  display: flex;
  flex-direction: column;
`;

export const ScrollStyled = styled.div`
  overflow-y: auto;
  padding: 20px;
`;
