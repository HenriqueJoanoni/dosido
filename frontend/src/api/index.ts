import axios from "axios";
import { IArticleListItem } from "../modals";
import { useQuery } from "@tanstack/react-query";

const axiosInstace = axios.create({
  baseURL: "https://some-domain.com/",
});

const getArticles = async (search: string) => {
  const { data } = await axiosInstace.get<IArticleListItem[]>(
    "/articles" + !!search ? `?search=${search}` : ""
  );

  return data;
};

const getArticleById = async (id: string) => {
  const { data } = await axiosInstace.get<IArticleListItem>(`/articles/${id}`);

  return data;
};

export const useGetArticles = (search: string) => {
  return useQuery({
    queryKey: ["articles", search],
    queryFn: () => getArticles(search),
  });
};

export const useGetArticleById = (id: string) => {
  return useQuery({
    queryKey: ["articles", id],
    queryFn: () => getArticleById(id),
  });
};
