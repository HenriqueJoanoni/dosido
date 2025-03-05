import { Link } from "react-router-dom";
import { Container, IconsContainer, LogoStyled, SearchStyled } from "./styles";
import { useState } from "react";

const NavBar = ({ onSearch }: { onSearch?: (t: string) => void }) => {
  const [expanded, setExpanded] = useState(false);

  const toggleExpandSearch = () => {
    setExpanded(!expanded);
  };

  console.log({ expanded });

  return (
    <div>
      <Container>
        <IconsContainer>
          <img src="/icons/menu.svg" />
        </IconsContainer>
        <Link to="/">
          <LogoStyled src="/logo.webp" />
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
          <img src="/icons/user.svg" />
        </IconsContainer>
      </Container>
    </div>
  );
};

export default NavBar;
