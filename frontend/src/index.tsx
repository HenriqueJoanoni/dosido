import ReactDOM from "react-dom/client";
import "./index.css";
import Home from "./pages/Home";
import Login from "./pages/Login";
import Register from "./pages/Register";
import AddArticles from "./pages/AddArticles";
import UpdateArticles from "./pages/UpdateArticles";
import reportWebVitals from "./reportWebVitals";
import { Routes, Route, BrowserRouter } from "react-router-dom";
import { App as AntdApp, ConfigProvider } from "antd";
import { themeConfig } from "./constants/theme";
import DetailPage from "./pages/DetailPage";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import Contact from "./pages/Contact";

function getCookie(name: string) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);

  if (parts.length === 2) return parts.pop()?.split(";").shift();
  return false;
}

function isAuthenticated() {
  return getCookie("token") != false;
}

const root = ReactDOM.createRoot(
  document.getElementById("root") as HTMLElement
);

function connectedRoute(route: React.ReactElement) {
  if (isAuthenticated()) return route;
  return null;
}

const queryClient = new QueryClient();

root.render(
  <AntdApp>
    <ConfigProvider
      theme={{ token: themeConfig, components: { Typography: {} } }}
    >
      <QueryClientProvider client={queryClient}>
        <BrowserRouter>
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/login" element={<Login />} />
            <Route path="/register" element={<Register />} />
            <Route path="/addarticles" element={<AddArticles />} />
            <Route path="/updatearticles" element={<UpdateArticles />} />
            <Route path="/contact" element={<Contact />} />
            <Route path="/:id" element={<DetailPage />} />
            {connectedRoute(<Route path="/test" element={<h4>Test</h4>} />)}
            <Route path="*" element={<p>Page Not Found</p>} />
          </Routes>
        </BrowserRouter>
      </QueryClientProvider>
    </ConfigProvider>
  </AntdApp>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
