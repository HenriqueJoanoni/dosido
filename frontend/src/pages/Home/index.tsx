import data from "../../mocks/articles.json";
import { JSX } from "react";
import { Container } from "./styles";
import ArticleListItem from "../../components/ArticleListItem";
import { useNavigate } from "react-router-dom";
import NavBar from "../../components/NavBar";

const Home = () => {
  const navigate = useNavigate();

  const handleClick = (id: string) => {
    navigate(id);
  };
  return (
    <div>
      <NavBar />
      <Container>
        {data.map(
          (article): JSX.Element => (
            <ArticleListItem
              article={article}
              onClick={() => handleClick(article.id)}
            />
          )
        )}
      </Container>
    </div>
  );
};

export default Home;
