import Meta from "antd/es/card/Meta";
import { IArticleListItem } from "../../modals";
import { CardStyled, DateStyled } from "./styles";

const ArticleListItem = ({
  article,
  onClick,
}: {
  article: IArticleListItem;
  onClick(): void;
}) => {
  const { id, title, description, image } = article;

  return (
    <CardStyled
      key={String(article.id)}
      hoverable
      style={{ width: "100%" }}
      cover={<img alt={title} src={image} />}
      onClick={onClick}
    >
      <Meta title={title} description={description} />
      <DateStyled>{article.date}</DateStyled>
    </CardStyled>
  );
};

export default ArticleListItem;
