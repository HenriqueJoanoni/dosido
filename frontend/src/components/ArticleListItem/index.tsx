import Meta from "antd/es/card/Meta";
import { IArticleListItem } from "../../modals";
import { CardStyled, DateStyled } from "./styles";

const ArticleListItem = ({
  article,
  onClick,
  loading,
}: {
  article?: IArticleListItem | null;
  onClick(): void;
  loading?: boolean;
}) => {
  const { title, description, image, date } = article || {};

  return (
    <CardStyled
      hoverable
      style={{ width: "100%" }}
      cover={<img alt={title} src={image} />}
      onClick={onClick}
      loading={loading}
    >
      <Meta title={title} description={description} />
      <DateStyled>{date}</DateStyled>
    </CardStyled>
  );
};

export default ArticleListItem;
