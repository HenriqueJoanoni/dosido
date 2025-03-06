import { Link, useParams } from "react-router-dom";
import { useGetArticleById } from "../../api";
import NavBar from "../../components/NavBar";
import {
  AuthContainer,
  Container,
  ContentContainer,
  Description,
  ImageStyled,
} from "./styles";
import { Button, Typography } from "antd";
import Markdown from "react-markdown";
import { useCookies } from "react-cookie";
import { AuthButton, AuthLink } from "../Login/styles";

const MOCK_DESCRIPTION = ` 
In an era dominated by digital streaming and instant access to millions of songs at the tap of a screen, one might assume that physical music formats are a thing of the past. However, vinyl records have been making a remarkable comeback over the past decade, experiencing a resurgence in popularity among music lovers of all generations.  &nbsp;

This article explores the factors driving the vinyl revival, from the nostalgia and warmth of analog sound to the tangible experience of collecting records. We delve into how younger audiences, despite growing up in a digital age, have embraced the format, drawn by its authenticity and the resurgence of record stores as cultural hubs. The role of artists and labels in re-releasing albums on vinyl, as well as the impact of special editions and exclusive pressings, also plays a crucial part in the format’s revival.  &nbsp;

![Vinyl Records](https://images.unsplash.com/photo-1471478331149-c72f17e33c73?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG11c2ljfGVufDB8fDB8fHww)   &nbsp;

Beyond nostalgia, the superior audio quality of vinyl, its artistic album covers, and the immersive listening experience contribute to its growing appeal. We also examine the role of Record Store Day, a global event that has boosted sales and rekindled appreciation for vinyl culture. Additionally, we discuss the sustainability aspect—how vinyl, when produced responsibly, can be a more eco-conscious alternative to the energy-intensive nature of streaming.  &nbsp;

Through interviews with collectors, audiophiles, and industry experts, this article provides a deep dive into why vinyl records have not only survived but are thriving in an era where convenience reigns supreme. Whether you’re a longtime vinyl enthusiast or a newcomer intrigued by the format, this exploration of the record renaissance sheds light on why spinning records has become more than just a trend—it’s a movement.`;

const DetailPage = () => {
  const { id } = useParams();
  const { data } = useGetArticleById(id || "");
  const [cookies, setCookie] = useCookies(["mycookie"]);

  const limitAticle = !cookies.mycookie;

  console.log({ login: cookies.mycookie });

  return (
    <Container>
      <NavBar />
      <ImageStyled src={data?.image} />
      <ContentContainer>
        <Typography.Title level={5}>{data?.title}</Typography.Title>
        <Description $limitArticle={limitAticle}>
          <Markdown>{MOCK_DESCRIPTION}</Markdown>
        </Description>
      </ContentContainer>
      {!!limitAticle && (
        <AuthContainer>
          <Typography.Title level={5}>
            Create an account to read the full story.
          </Typography.Title>
          <Typography>
            This story is available exclusively to DoSiDo members. If you're new
            to DoSiDo, create an account and enjoy reading this story on us!
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
    </Container>
  );
};

export default DetailPage;
