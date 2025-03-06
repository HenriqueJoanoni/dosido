import { Link, useNavigate } from "react-router-dom";
import { Container, IconsContainer, LogoStyled, SearchStyled } from "./styles";
import { useState } from "react";
import { App, Drawer, Flex, Menu, Modal } from "antd";
import { colorPrimary } from "../../constants/theme";
import { LogoutOutlined, EditOutlined } from "@ant-design/icons";
import { useCookies } from "react-cookie";

const NavBar = ({ onSearch }: { onSearch?: (t: string) => void }) => {
  const [expanded, setExpanded] = useState(false);
  const [open, setOpen] = useState(false);
  const { modal } = App.useApp();
  const [cookies, , removeCookie] = useCookies(["mycookie"]);
  const navigate = useNavigate();

  const showDrawer = () => {
    setOpen(true);
  };

  const closeDrawer = () => {
    setOpen(false);
  };

  const toggleExpandSearch = () => {
    setExpanded(!expanded);
  };

  const showLogoutConfirm = (e: any) => {
    modal.confirm({
      title: "Are you sure?",
      icon: null,
      content: "You want to logout",
      okText: "Yes",
      cancelText: "No",
      onOk: () => {
        removeCookie("mycookie", { path: "/" });
      },
    });
  };

  const redirectToAddArticle = () => {
    navigate("/addarticles");
  };

  return (
    <div>
      <Container>
        <IconsContainer>
          <img src="/icons/menu.svg" onClick={showDrawer} />
        </IconsContainer>
        <Link to="/">
          <LogoStyled src="/logo.png" />
        </Link>
        <IconsContainer style={{ justifyContent: "flex-end" }}>
          {!!onSearch && (
            <SearchStyled
              size="small"
              placeholder="e.g: Bob Dylan News"
              onSearch={onSearch}
              onClear={() => onSearch("")}
              $expanded={expanded}
              allowClear
            />
          )}
          {!!onSearch && (
            <img src="/icons/search.svg" onClick={toggleExpandSearch} />
          )}

          <Link to="/login">
            <img src="/icons/user.svg" />
          </Link>
        </IconsContainer>
      </Container>

      {/* Mobile Menu Drawer */}
      <Drawer
        title={
          <Flex style={{ paddingTop: 3 }}>
            <LogoStyled src="/logo.png" style={{ height: 23 }} />
          </Flex>
        }
        placement="left"
        onClose={closeDrawer}
        open={open}
        style={{ backgroundColor: colorPrimary }}
      >
        <Menu
          mode="vertical"
          onClick={closeDrawer}
          style={{ backgroundColor: colorPrimary }}
          items={[
            {
              key: "home",
              label: "Home",
            },
            {
              key: "music",
              label: "Music",
            },
            {
              key: "concerts",
              label: "Concerts",
            },
            {
              key: "festivals",
              label: "Festivals",
            },
            {
              key: "history",
              label: "History",
            },
            {
              key: "contact",
              label: "Contact",
            },
            !!cookies.mycookie
              ? {
                  key: "addarticle",
                  label: "Add Article",
                  icon: <EditOutlined />,
                  onClick: redirectToAddArticle,
                }
              : [],
            !!cookies.mycookie
              ? {
                  key: "logout",
                  label: "Logout",
                  icon: <LogoutOutlined />,
                  onClick: showLogoutConfirm,
                  danger: true,
                }
              : [],
          ].flat()}
        />
      </Drawer>
    </div>
  );
};

export default NavBar;
