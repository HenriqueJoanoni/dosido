import { useParams } from "react-router-dom";
import { useGetArticleById } from "../../api";
import NavBar from "../../components/NavBar";
import { Container, ImageStyled } from "./styles";

const DetailPage = () => {
  const { id } = useParams();
  const { data } = useGetArticleById(id || "");

  return (
    <Container>
      <NavBar />

      <ImageStyled src={data?.image} />
    </Container>
  );
};

export default DetailPage;
