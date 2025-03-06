import Markdown from "react-markdown";
import NavBar from "../../components/NavBar";
import { Container, ScrollStyled } from "./styles";
import { contactData } from "./mock";
import { Typography } from "antd";

const Contact = () => {
  return (
    <Container>
      <NavBar />
      <ScrollStyled>
        <Typography>
          <Markdown>{contactData}</Markdown>
        </Typography>
      </ScrollStyled>
    </Container>
  );
};

export default Contact;
