import Meta from "antd/es/card/Meta";
import { IArticleListItem } from "../../modals";
import { CardStyled, DateStyled } from "./styles";
import { Tag } from "antd";

const ArticleListItem = ({
  article,
  onClick,
  loading,
}: {
  article?: IArticleListItem | null;
  onClick(): void;
  loading?: boolean;
}) => {
  const { title, description, image, date, categories } = article || {};

  return (
    <CardStyled
      hoverable
      style={{ width: "100%" }}
      cover={<img alt={title} src={image} />}
      onClick={onClick}
      loading={loading}
    >
      <Meta title={<><Tag color="#961919">{categories?.[0]?.name}</Tag>{title}</>}description={description}/>
      <DateStyled>{date}</DateStyled>
    </CardStyled>
  );
};

export default ArticleListItem;
