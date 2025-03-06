import axios from "axios";
import { IArticleListItem } from "../modals";
import { useQuery } from "@tanstack/react-query";

export const axiosInstance = axios.create({
  baseURL: "http://localhost:8000/api",
  headers: { "Content-Type": "application/json", Accept: "application/json" },
});

const getArticles = async (search: string) => {
  const { data } = await axiosInstance.get<IArticleListItem[]>("/articles", {
    params: { search },
  });

  return data;
};

const getArticleById = async (id: string) => {
  const { data } = await axiosInstance.get<IArticleListItem>(`/articles/${id}`);

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
