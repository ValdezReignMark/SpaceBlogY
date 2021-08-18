import { CircularProgress, AppBar, Button, Paper, Table, TableCell, Grid, Toolbar, Typography, Box, Avatar, TableContainer, TableHead, TableRow, TableBody, Dialog, DialogContent, TextField, DialogActions } from '@material-ui/core';
import { Add as AddIcon, RowingSharp } from '@material-ui/icons';
import React, { useEffect, useState } from 'react';
import {  makeStyles  } from '@material-ui/core/styles';
import ReactDOM from 'react-dom';
import Header from '../HeaderAndFooter/Header';
import Footer from '../HeaderAndFooter/Footer';
import { contains } from 'jquery';
import apisauce from '../config/apisauce';

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

const PostsIndex = () => {
    //show post
    const [blogPosts, setBlogPosts] = useState([]);
    // edit posts
    const [ openEdit, setOpenEdit ] = useState(false);
    //delete posts
    const [ openDeleteConfirm, setDeleteConfirmation] = useState(false);
    ///create dialog 
    const [ openCreate, setOpenCreate] =useState(false);

/// Action Buttons Global
    const [ id, setID ] = useState('');
    const [ data, setData ] = useState('');
    //used in edit data
    const [ editBody, setEditBody ] = useState('');
    const [ editTitle, setEditTitle ] = useState('');
    const [ editUserName, setEditUserName ] = useState('');
     //used in Create data
     const [ createBody, setCreateBody ] = useState('');
     const [ createTitle, setCreateTitle ] = useState('');
     const [ createUserName, setCreateUserName ] = useState('');


    //  /Create dialog 
     const openDialogCreate = (data, dialogCreateValue) => {
        setOpenCreate (dialogCreateValue); 
        setID(data.id);
        setCreateTitle(data.title); /**get the request */
        setCreateBody(data.body);
        setCreateUserName(data.user_name);   
    }
    const saveCreate = async () => {
        let data = {
            id:         id,
            title:      createTitle,
            body:       createBody,
            user_name:  createUserName,
        };
        const res = await apisauce.post(`/posts/creatpost`,data)
        if(res.ok) {
            window.location.replace("/home");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(data.res);
    }


    ///Edit dialog 
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
            window.location.replace("/home");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(data.res);
    }

    ///Delete dialog 
    const deleteDialog = (data, deleteConfirmation) => {
        setDeleteConfirmation(deleteConfirmation);
        setID(data.id);
    }

    const deleteThisPost = async () => {
        console.log(id);
        const res = await apisauce.post(`/posts/delpost/${id}`)

        if(res.ok){
            window.location.replace("/home");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(res.data);
    }

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
                <TableCell>Author</TableCell>
                <TableCell align="center">Title</TableCell>
                <TableCell align="center">Content</TableCell>
                <TableCell colspan="2" align="center">Action</TableCell>
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

                        <Button onClick={()=>openDialogEdit(data,true)}>Edit</Button>
                        <Button onClick={()=>deleteDialog(data,true)}>Delete</Button>
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
                />

                <TextField
                    value={editBody}
                    onChange={(event)=>setEditBody(event.target.value)}
                    fullWidth
                    multiline={true}
                />
            </DialogContent>
            <DialogActions>
                <Button onClick={saveUpdate}> Save </Button>
            </DialogActions>
        </Dialog>

        
        <Dialog
            open={openCreate}
            onClose={()=>setOpenCreate(false)}
            fullWidth
        >
            <DialogContent>
            <TextField
                    value={createUserName}
                    onChange={(event)=>setCreateUserName(event.target.value)}
                    fullWidth
                    multiline={true}
                />    
            <TextField
                    value={createTitle}
                    onChange={(event)=>setCreateTitle(event.target.value)}
                    fullWidth
                    multiline={true}
                />

                <TextField
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

      </div>

        


    )
}

export default PostsIndex;

