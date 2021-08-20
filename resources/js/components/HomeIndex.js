import { CircularProgress, AppBar, Button, Paper, Table, TableCell, Grid, Toolbar, Typography, Box, Avatar, TableContainer, TableHead, TableRow, TableBody, Dialog, DialogContent, TextField, DialogActions, GridList } from '@material-ui/core';
import { Add as AddIcon, RowingSharp } from '@material-ui/icons';
import React, { useEffect, useState } from 'react';
import {  makeStyles  } from '@material-ui/core/styles';
import ReactDOM from 'react-dom';
import Header from '../HeaderAndFooter/Header';
import Footer from '../HeaderAndFooter/Footer';
import { contains, post } from 'jquery';
import apisauce from '../config/apisauce';
import DeleteIcon from '@material-ui/icons/Delete';
import Create from '@material-ui/icons/Create';
import Visibility from '@material-ui/icons/Visibility';

import { positions } from '@material-ui/system';

const useStyles = makeStyles((theme) => ({
    table: {
        minWidth: 650,
    },
    margin: {
        margin: theme.spacing.unit,
      },
    tableContainer: {
        borderRaduis: 15,

        maxWidth: '50%',
   
        marginLeft: '35%'
      
    },
    tableHeadercell:{
        fontWeight: 'bold',
        backgroundColor: theme.palette.secondary.dark,
        color: theme.palette.getContrastText(theme.palette.primary.dark)
    }
  }));
  

const HomeIndex = (props) => {
    const { userId, name, email } = props;
    console.log('dataset', props);

    const [ id, setID ] = useState('');
    const [ openCreate, setOpenCreate] =useState(false);
    const [ openEdit, setOpenEdit ] = useState(false);
   
    const [ data, setData ] = useState('');
    const [ createBody, setCreateBody ] = useState('');
    const [ createTitle, setCreateTitle ] = useState('');
    const [ createUserName, setCreateUserName ] = useState('');

    const [ editBody, setEditBody ] = useState('');
    const [ editTitle, setEditTitle ] = useState('');
    const [ editUserName, setEditUserName ] = useState('');

    //delete posts
    const [ openDeleteConfirm, setDeleteConfirmation] = useState(false);
    //get login user

    
   
  
   ///Delete dialog 
   const deleteDialog = (data, deleteConfirmation) => {
    setDeleteConfirmation(deleteConfirmation);
    setID(data);
    }

    const deleteThisPost = async () => {
        console.log(data.id);
        const res = await apisauce.post(`/posts/delpost/${id}`)

        if(res.ok){
            window.location.replace("/homeIndex");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(res.data);
    }



  ///view
  const openDialogEdit = (data, dialogEditValue) => {
    setOpenEdit(dialogEditValue);
    setID(data.id);
    setEditTitle(data.title); /**get the request */
    setEditBody(data.body);
    setEditUserName(data.user_name);
}
const saveUpdate = async () => {
    let data = {
        title:      editTitle,
        body:       editBody,
        user_name:  editUserName,
    };

    const res = await apisauce.post(`/posts/update/${id}`,data)
    if(res.ok) {
        window.location.replace("/homeIndex");
        console.log('success')
    }else {
        console.log('fail')
    }
    console.log(data.res);
}

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
            window.location.replace("/homeIndex");
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


   
       
        <Grid >
           
            <TableContainer 
            className={classes.tableContainer}
            component={Paper}
            >
              <Avatar className={classes.ButtonView} alt="Remy Sharp" src="/static/images/avatar/1.jpg" />
 
                 <h5>Name / author: <h3>{name}</h3></h5>

  
    
                     
            <Table 
            className={classes.table} 
            aria-label="simple table"
            >
                
            <TableHead>
                <TableRow>
                <TableCell  className={classes.tableHeadercell}               >Author</TableCell>
                <TableCell  className={classes.tableHeadercell} align="center">Title</TableCell>
                <TableCell  className={classes.tableHeadercell} align="center">Content</TableCell>        
                <Button color="primary" className={classes.ButtonView} onClick={()=>openDialogCreate(data,true)}><Create/>Add Post</Button>
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
                        <Button size="small" className={classes.margin} onClick={()=>openDialogEdit(data,true)}><Visibility/>View</Button>
                        {
                            name == data.user_name ?
                            <Button size="small"  onClick={()=>deleteDialog(data.id,true)}
                            > <DeleteIcon/>Delete</Button>
                            :
                            undefined
                        }
                        
                        

                         </Grid>
                         
                    </TableRow>
                   ) 
                })
                : undefined
            }
    
            </Table>


            </TableContainer>
      
        </Grid>



            {/* delete Dialog */}
        <Dialog
            open={openDeleteConfirm}
            onClose={()=>setDeleteConfirmation(false)}
            fullWidth
        >
                
            <DialogContent>
                <TextField 
                    fullWidth
                    value="Are you Sure You want to delete ?"
                />
            </DialogContent>
            <DialogActions>
                <Button onClick={deleteThisPost}> Delete</Button>
            </DialogActions>
        </Dialog>














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

            </DialogContent>
            <DialogActions>
                <Button onClick={saveCreate}> Save </Button>
            </DialogActions>
        </Dialog>



        <Dialog
            open={openEdit}
            onClose={()=>setOpenEdit(false)}
            fullWidth
        >
            <DialogContent>
            <TextField
                    value={editUserName}
                    onChange={(event)=>setEditUserName(event.target.value)}
                    fullWidth
                    multiline={true}
                    disabled
                />    
            <TextField
                    
                    value={editTitle}
                    onChange={(event)=>setEditTitle(event.target.value)}
                    fullWidth
                    multiline={true}
                    disabled
                />

                <TextField
                    value={editBody}
                    onChange={(event)=>setEditBody(event.target.value)}
                    fullWidth
                    multiline={true}
                    disabled
                />
            </DialogContent>
            <DialogActions>
                <Button onClick={saveUpdate}> Back </Button>
            </DialogActions>
        </Dialog>

            







      </div>

        


    )
}

export default HomeIndex;

