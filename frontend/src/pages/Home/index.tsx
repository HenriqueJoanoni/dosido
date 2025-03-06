import { JSX, useState } from "react";
import {
  ListContainer,
  ImageStyled,
  Container,
  DividerStyled,
  PreviewContentContainer,
  DateStyled,
  PreviewArticleContainer,
  ScrollStyled,
} from "./styles";
import ArticleListItem from "../../components/ArticleListItem";
import { useNavigate } from "react-router-dom";
import NavBar from "../../components/NavBar";
import { Skeleton, Typography } from "antd";
import { limitText } from "../../utils";
import moment from "moment";
import { useGetArticles } from "../../api";

const Home = () => {
  const navigate = useNavigate();
  const [search, setSearch] = useState("");
  const { data, isLoading } = useGetArticles(search);

  const [previewArticle, ...otherArticles] = !!data?.length ? data : [];
  const listArticles =
    !otherArticles.length && isLoading
      ? [null, null, null, null]
      : otherArticles;

  const handleClick = (id: string) => {
    navigate(`/${id}`);
  };

  const onSearch = (value: string) => {
    setSearch(value);
  };

  return (
    <Container>
      <NavBar onSearch={onSearch} />
      <ScrollStyled>
        {isLoading && (
          <PreviewArticleContainer>
            <Skeleton.Image style={{ width: "100vw", height: 200 }} />

            <PreviewContentContainer>
              <Skeleton.Input style={{ width: "80%" }} />
              <Skeleton.Input
                style={{ width: "100%", marginTop: 10, marginBottom: 20 }}
              />
            </PreviewContentContainer>
          </PreviewArticleContainer>
        )}
        {!!previewArticle && (
          <>
            <PreviewArticleContainer
              onClick={() => handleClick(previewArticle.id)}
            >
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
                <Typography.Title level={5}>
                  {previewArticle.title}
                </Typography.Title>
                <Typography>
                  {limitText(previewArticle.description, 100)}
                </Typography>
              </PreviewContentContainer>
            </PreviewArticleContainer>
            <DividerStyled />
          </>
        )}
        <ListContainer>
          {listArticles?.map(
            (article, index): JSX.Element => (
              <ArticleListItem
                loading={isLoading}
                key={String(index)}
                article={article}
                onClick={() => (article ? handleClick(article.id) : {})}
              />
            )
          )}
        </ListContainer>
      </ScrollStyled>
    </Container>
  );
};

export default Home;
