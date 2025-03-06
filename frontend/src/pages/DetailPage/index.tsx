import { Link, useParams } from "react-router-dom";
import { useGetArticleById } from "../../api";
import NavBar from "../../components/NavBar";
import {
  AuthContainer,
  Container,
  ContentContainer,
  Description,
  ImageStyled,
  ScrollStyled,
} from "./styles";
import { Skeleton, Typography } from "antd";
import Markdown from "react-markdown";
import { useCookies } from "react-cookie";
import { AuthButton, AuthLink } from "../Login/styles";

const DetailPage = () => {
  const { id } = useParams();
  const { data, isLoading } = useGetArticleById(id || "");
  const [cookies] = useCookies(["mycookie"]);

  const limitArticle = !cookies.mycookie;

  if (isLoading)
    return (
      <Container>
        <NavBar />
        <Skeleton.Image style={{ width: "100vw", height: 200 }} />

        <ContentContainer style={{ display: "flex", flexDirection: "column" }}>
          <Skeleton.Input style={{ width: "80%" }} />
          <Skeleton.Input style={{ width: "100%", marginTop: 10 }} />
          <Skeleton.Input style={{ width: "100%", marginTop: 5 }} />
          <Skeleton.Input style={{ width: "100%", marginTop: 5 }} />
          <Skeleton.Input
            style={{ width: "50%", marginTop: 5, marginBottom: 20 }}
          />
        </ContentContainer>
      </Container>
    );

  return (
    <Container>
      <NavBar />
      <ScrollStyled>
        <ImageStyled src={data?.image} />
        <ContentContainer>
          <Typography.Title level={5}>{data?.title}</Typography.Title>
          <Description $limitArticle={limitArticle}>
            <Markdown>{data?.description}</Markdown>
          </Description>
        </ContentContainer>
        {!!limitArticle && (
          <AuthContainer>
            <Typography.Title level={5}>
              Create an account to read the full story.
            </Typography.Title>
            <Typography>
              This story is available exclusively to DoSiDo members. If you're
              new to DoSiDo, create an account and enjoy reading this story on
              us!
            </Typography>
            <Link to={`/login?article=${id}`}>
              <AuthButton>Login</AuthButton>
            </Link>
            <AuthLink>
              <Link to={`/register?article=${id}`}>
                Don't have an account? Register
              </Link>
            </AuthLink>
          </AuthContainer>
        )}
      </ScrollStyled>
    </Container>
  );
};

export default DetailPage;
