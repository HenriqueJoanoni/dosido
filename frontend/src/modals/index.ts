export interface IArticleListItem {
  id: string;
  image: string;
  title: string;
  description: string;
  date: string;
  categories?: Array<{
    id: number;
    name: string;
    created_at: string;
    updated_at: string;
    pivot: {
      article_id: number;
      category_id: number;
    };
  }>;
}
