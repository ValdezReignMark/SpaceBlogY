import React from 'react';
import PropTypes from 'prop-types';
import AppBar from '@material-ui/core/AppBar';
import CssBaseline from '@material-ui/core/CssBaseline';
import Divider from '@material-ui/core/Divider';
import Drawer from '@material-ui/core/Drawer';
import {Hidden, Grid} from '@material-ui/core';
import IconButton from '@material-ui/core/IconButton';
import InboxIcon from '@material-ui/icons/MoveToInbox';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';

import ListItemLink from './ListItemLink';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import ListItemText from '@material-ui/core/ListItemText';
import MailIcon from '@material-ui/icons/Mail';
import MenuIcon from '@material-ui/icons/Menu';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import { Attachment ,Home  ,ListAlt ,EmojiPeople } from '@material-ui/icons';
import { makeStyles, useTheme } from '@material-ui/core/styles';






const drawerWidth = 240;

const useStyles = makeStyles((theme) => ({
  root: {
    display: 'flex',
  },
  drawer: {
    [theme.breakpoints.up('sm')]: {
      width: drawerWidth,
      flexShrink: 0,
    },
  },
  appBar: {
    [theme.breakpoints.up('sm')]: {
      width: `calc(100% - ${drawerWidth}px)`,
      // marginLeft: drawerWidth,
    },
  },
  menuButton: {
    marginRight: theme.spacing(2),
    [theme.breakpoints.up('sm')]: {
      display: 'none',
    },
  },
  // necessary for content to be below app bar
  toolbar: theme.mixins.toolbar,
  drawerPaper: {
    width: drawerWidth,
  },
  content: {
    flexGrow: 1,
    padding: theme.spacing(3),
  },
}));



function ResponsiveDrawer(props) {
  const { window } = props;
  const classes = useStyles();
  const theme = useTheme();
  const [mobileOpen, setMobileOpen] = React.useState(false);

  const handleDrawerToggle = () => {
    setMobileOpen(!mobileOpen);
  };






  const drawer = (

    <div >
      <div className={classes.toolbar} />

      <Divider />

      <List>  
         <ListItemLink
            href="/homeIndex"
          >
            <ListItemIcon><Home/></ListItemIcon>
            <ListItemText primary="Home" />
          </ListItemLink>  

         <ListItemLink
            href="/usersIndex"
          >
            <ListItemIcon><EmojiPeople/></ListItemIcon>
            <ListItemText primary="Manage users" />
          </ListItemLink>

          <ListItemLink
            href="/postsIndex"
          >
            <ListItemIcon><ListAlt/></ListItemIcon>
            <ListItemText primary="Manage Posts" />
          </ListItemLink>

          <ListItemLink
            href="/authorsIndex"
          >
            <ListItemIcon><Attachment/></ListItemIcon>
            <ListItemText primary="Manage Authors" />
          </ListItemLink>
      </List>   
     
      <Divider />

      <List>
        {['Inbox', 'Starred', 'Send email', 'Drafts'].map((text, index) => (
          <ListItem button key={text}>
            <ListItemIcon>{index % 2 === 0 ? <InboxIcon /> : <MailIcon />}</ListItemIcon>
            <ListItemText primary={text} />
          </ListItem>
        ))}

<Divider />
      <ListItemLink
            href="/logout"
          >
 
            <ListItemIcon><Attachment/></ListItemIcon>
            <ListItemText primary="Logout" />
          </ListItemLink>



      </List>
      
      
      <Divider /> 
    
    </div>
  );








  const container = window !== undefined ? () => window().document.body : undefined;

  return (

    <div className={classes.root}>
      <CssBaseline />


      <AppBar position="fixed" className={classes.appBar}>
        <Toolbar>
        
          <IconButton
            color="inherit"
            aria-label="open drawer"
            edge="start"
            onClick={handleDrawerToggle}
            className={classes.menuButton}
          >
            <MenuIcon />
          </IconButton>

          <Typography href="/" variant="h6" noWrap>
          Space Blog Rocks
          </Typography>
          
        </Toolbar>
      </AppBar>


    <Grid>
      <nav className={classes.drawer} aria-label="mailbox folders">
        <Hidden smUp implementation="css">
          <Drawer
            container={container}
            variant="temporary"
            anchor={theme.direction === 'rtl' ? 'right' : 'left'}
            open={mobileOpen}
            onClose={handleDrawerToggle}
            classes={{
              paper: classes.drawerPaper,
            }}
            ModalProps={{
              keepMounted: true, // Better open performance on mobile.
            }}
          >
            {drawer}
          </Drawer>
        </Hidden>
        <Hidden xsDown implementation="css">
          <Drawer
            classes={{
              paper: classes.drawerPaper,
            }}
            variant="permanent"
            open
          >
            {drawer}
          </Drawer>
        </Hidden>
      </nav>
      </Grid>

      <main className={classes.content}>
        <div className={classes.toolbar} />
      
      </main>
    </div>
  );
}

ResponsiveDrawer.propTypes = {
  /**
   * Injected by the documentation to work in an iframe.
   * You won't need it on your project.
   */
  window: PropTypes.func,
};

export default ResponsiveDrawer;
