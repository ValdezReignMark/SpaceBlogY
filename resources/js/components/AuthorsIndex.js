import {  Card, Button, Paper, Table, TableCell, Grid, Toolbar, Typography, Box, Avatar, TableContainer, TableHead, TableRow, TableBody, Dialog, DialogContent, TextField, DialogActions, Input } from '@material-ui/core';
import { Add as AddIcon, RowingSharp } from '@material-ui/icons';
import React, { useEffect, useState } from 'react';
import {  makeStyles  } from '@material-ui/core/styles';
import ReactDOM from 'react-dom';
import Header from '../HeaderAndFooter/Header';
import Footer from '../HeaderAndFooter/Footer';
import { contains } from 'jquery';
import apisauce from '../config/apisauce';
import { CardActionArea, CardMedia, CardContent, CardActions } from '@material-ui/core';

import { positions } from '@material-ui/system';

const useStyles = makeStyles((theme) => ({
    table: {
        minWidth: 650,
    },
    tableContainer: {
        borderRaduis: 15,

        maxWidth: '50%',
   
        marginLeft: '35%'
      
    }
    // tableHeadercell:{
    //     fontWeight: 'bold',
    //     backgroundColor: theme.palette.primary.dark,
    //     color: theme.palette.getContrastText(theme.palette.primary.dark)
    // }
  }));
  

const AuthorsIndex = (props) => {
    const { id : userId, name, email } = props;
    console.log('dataset', props);

    const [ id, setID ] = useState('');
    const [ openCreate, setOpenCreate] =useState(false);
   
    const [ data, setData ] = useState('');
    const [ createBody, setCreateBody ] = useState('');
    const [ createTitle, setCreateTitle ] = useState('');
    const [ createUserName, setCreateUserName ] = useState('');



       //  /Create dialog 
       const openDialogCreate = (data, dialogCreateValue) => {
        setOpenCreate (dialogCreateValue); 
        setID(data.id);
        setCreateTitle(data.title); /**get the request */
        setCreateBody(data.body);
        setCreateUserName(data.name);   
    }
    const saveCreate = async () => {
        let data = {
            id:         id,
            title:      createTitle,
            body:       createBody,
            user_name:  name,
        };
        const res = await apisauce.post(`/posts/creatpost`,data)
        if(res.ok) {
            window.location.replace("/authorsIndex");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(data.res);
    }
    

    //show post
    const [blogPosts, setBlogPosts] = useState([]);
    ///show tables
    const fetchBlogPosts = () => {
        apisauce.get('/posts').then((result) => {
            console.log('posts', result.data);
            setBlogPosts(result.data);
        });
    }
    useEffect(() => {
        fetchBlogPosts();
    }, []);

    const classes = useStyles();

    return(

        <div>
        <Header/>
        <div>
        </div>
        <Grid>
            <TableContainer 
            className={classes.tableContainer}
            component={Paper}
            >
                        <Button onClick={()=>openDialogCreate(data,true)}>Create/Add Post</Button>

            <Table 
            className={classes.table} 
            aria-label="simple table"
            >
 
            <TableHead>
                <TableRow>
                <TableCell  className={classes.tableHeadercell}               >Author</TableCell>
                <TableCell  className={classes.tableHeadercell} align="center">Title</TableCell>
                <TableCell  className={classes.tableHeadercell} align="center">Content</TableCell>
                </TableRow>
            </TableHead>

            {
                blogPosts.length != 0 ?
                blogPosts.map((data) => {
                   return (

                    <TableRow key={data.id}>
                        <TableCell component="th" scope="row">
                        {data.user_name}
                        </TableCell>
                        <TableCell align="center">{data.title}</TableCell>
                        <TableCell align="center">{data.body}</TableCell>
                        <Grid align="center"> 

                         </Grid>
                         
                    </TableRow>
                   ) 
                })
                : undefined
            }
    
            </Table>


            </TableContainer>
      
        </Grid>
        <Card className={classes.tableContainer}>
      <CardActionArea>
        <CardMedia
          component="img"
          alt="Contemplative Reptile"
          height="140"
          image="/static/images/cards/contemplative-reptile.jpg"
          title="Contemplative Reptile"
        />
        <CardContent>
          <Typography gutterBottom variant="h5" component="h2">
            Lizard
          </Typography>
          <Typography variant="body2" color="textSecondary" component="p">
            Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging
            across all continents except Antarctica
          </Typography>
        </CardContent>
      </CardActionArea>
      <CardActions>
        <Button size="small" color="primary">
          Share
        </Button>
        <Button size="small" color="primary">
          Learn More
        </Button>
      </CardActions>
    </Card>
            


















        <Dialog
            open={openCreate}
            onClose={()=>setOpenCreate(false)}
            fullWidth
        >
            <DialogContent>
           
            <TextField
                    label="Set Title"
                    value={createTitle}
                    onChange={(event)=>setCreateTitle(event.target.value)}
                    fullWidth
                    multiline={true}
                />

                <TextField
                label="Set Content"
                    value={createBody}
                    onChange={(event)=>setCreateBody(event.target.value)}
                    fullWidth
                    multiline={true}
                />
               <form >
         
                  <Input name="image" id="Image" type="file"/>
               </form>
            </DialogContent>
            <DialogActions>
                <Button onClick={saveCreate}> Save </Button>
            </DialogActions>
        </Dialog>
      </div>

        


    )
}

export default AuthorsIndex;

