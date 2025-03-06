import { useParams } from "react-router-dom";
import { useGetArticleById } from "../../api";
import NavBar from "../../components/NavBar";
import { Container, ContentContainer, ImageStyled } from "./styles";
import { Typography } from "antd";

const DetailPage = () => {
  const { id } = useParams();
  const { data } = useGetArticleById(id || "");

  return (
    <Container>
      <NavBar />

      <ImageStyled src={data?.image} />
      <ContentContainer>
        <Typography.Title level={5}>{data?.title}</Typography.Title>
        <Typography>{data?.description}</Typography>
      </ContentContainer>
    </Container>
  );
};

export default DetailPage;
