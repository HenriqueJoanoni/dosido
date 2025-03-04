import data from "../../mocks/articles.json";
import { JSX } from "react";
import {
  ListContainer,
  ImageStyled,
  Container,
  DividerStyled,
  PreviewContentContainer,
  DateStyled,
  PreviewArticleContainer,
} from "./styles";
import ArticleListItem from "../../components/ArticleListItem";
import { useNavigate } from "react-router-dom";
import NavBar from "../../components/NavBar";
import { Typography } from "antd";
import { limitText } from "../../utils";
import moment from "moment";

const Home = () => {
  const navigate = useNavigate();

  const previewArticle = data[0];

  const handleClick = (id: string) => {
    navigate(id);
  };

  const onSearch = (value: string) => {
    console.log({ value });
  };

  return (
    <Container>
      <NavBar onSearch={onSearch} />
      <PreviewArticleContainer onClick={() => handleClick(previewArticle.id)}>
        <DateStyled level={5}>
          {moment(previewArticle.date).calendar(null, {
            sameDay: "[Today]",
            lastDay: "[Yesterday]",
            lastWeek: "[Last] dddd",
            sameElse: "MMM D, YYYY",
          })}
        </DateStyled>
        <ImageStyled src={previewArticle.image} />
        <PreviewContentContainer>
          <Typography.Title level={5}>{previewArticle.title}</Typography.Title>
          <Typography style={{ color: "rgba(0,0,0,0.45)" }}>
            {limitText(previewArticle.description, 100)}
          </Typography>
        </PreviewContentContainer>
      </PreviewArticleContainer>
      <DividerStyled />
      <ListContainer>
        {data.map(
          (article): JSX.Element => (
            <ArticleListItem
              key={article.id}
              article={article}
              onClick={() => handleClick(article.id)}
            />
          )
        )}
      </ListContainer>
    </Container>
  );
};

export default Home;
