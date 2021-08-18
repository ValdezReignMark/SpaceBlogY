import { ListItem } from "@material-ui/core";
import React from "react";

function ListItemLink(props) {
    return <ListItem button component="a" {...props} />;
  }


  export default ListItemLink;