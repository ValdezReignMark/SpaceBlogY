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
        maxWidth: '75%',
        marginLeft: '21.5%'
      
    }
    // tableHeadercell:{
    //     fontWeight: 'bold',
    //     backgroundColor: theme.palette.primary.dark,
    //     color: theme.palette.getContrastText(theme.palette.primary.dark)
    // }
  }));
 

const UsersIndex = () => {
   


    //show users
   const [ userList, setuserList ] = useState([]);
   //create users
   const [ openCreateDialog, SetCreateDialog ] = useState(false);
    //edit users
    const [ openEditUsers, setEditUser ] = useState(false);
    //delete users
     //delete posts
     const [ openDeleteConfirm, setDeleteConfirmation] = useState(false);
    //Action variables
    const [ id, setID ] = useState('');
    //Action variable MANIPULATE DATA
    const [ data, setData ] = useState('');
    //Create Variable users Manipulate data
    const [ createName, setCreateName ] = useState('');
    const [ createEmail, setCreateEmail ] = useState('');
    const [ createPassword, setCreatePassword ] = useState('');
       //Edit Variable users Manipulate data
       const [ editName, setEditName ] = useState('');
       const [ editEmail, setEditEmail ] = useState('');
       const [ editPassword, setEditPassword ] = useState('');

 ///Delete dialog 
 const deleteDialog = (data, deleteConfirmation) => {
    setDeleteConfirmation(deleteConfirmation);
    setID(data.id);
}

const deleteThisuser = async () => {
    console.log(id);
    const res = await apisauce.post(`/users/delusers/${id}`)

    if(res.ok){
        window.location.replace("/usersIndex");
        console.log('success')
    }else {
        console.log('fail')
    }
    console.log(res.data);
}

    ///Edit dialog 
    const openEditedUsers = (data, dialogEditValue) => {
        setEditUser(dialogEditValue);
        setID(data.id);
        setEditName(data.name); /**get the request */
        setEditEmail(data.email);
        setEditPassword(data.password);
    }

    const saveEditedUpdate = async () => {
        let data = {
            name:      editName,
            email:     editEmail,
            password:  editPassword,
        };
   
        const res = await apisauce.post(`/users/update/${id}`,data)
        if(res.ok) {
            window.location.replace("/usersIndex");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(data.res);
    }


      //  /Create dialog 
     const openCreateUsers = (data, dialogCreateValue) => {
        SetCreateDialog (dialogCreateValue); 
        setID(data.id);
        setCreateName(data.name); /**get the request */
        setCreateEmail(data.email);
        setCreatePassword(data.password);   
    }
    const saveCreateUsers = async () => {
        let data = {
            id:         id,
            name:      createName,
            email:       createEmail,
            password:  createPassword,
        };
        const res = await apisauce.post(`/users/creatpost`,data)
        if(res.ok) {
            window.location.replace("/usersIndex");
            console.log('success')
        }else {
            console.log('fail')
        }
        console.log(data.res);
    }


        //show users
    const fetchUsersList = () => {
        apisauce.get('/users/').then((result) => {
            console.log('users', result.data);
            setuserList(result.data);
        });
    }
    useEffect(() => {
        fetchUsersList();
    }, []);


    const classes = useStyles();
    return(
    
 <div>

<Header/>
<Grid>

<TableContainer  
className={classes.tableContainer} 
component={Paper}>

   <Button onClick={()=>openCreateUsers(data,true)}>Create/Add Users</Button>

    <Table 
    className={classes.table}  
    aria-label="simple table"
    >
    
    <TableHead>
        <TableRow>
        <TableCell>Name</TableCell>
        <TableCell align="center">Email</TableCell>
        <TableCell align="center">Email Verification</TableCell>
        <TableCell align="center">Date Created</TableCell>
        <TableCell align="center">Date Updated</TableCell>
        <TableCell colspan="2" align="center">Action</TableCell>
        </TableRow>
    </TableHead>
    {
        userList.length != 0 ?
        userList.map((data) => {
           return (

            <TableRow key={data.id}>
                <TableCell component="th" scope="row">
                {data.name}
                </TableCell>
                <TableCell align="center">{data.email}</TableCell>
                <TableCell align="center">{data.email_verified_at}</TableCell>
                <TableCell align="center">{data.created_at}</TableCell>
                <TableCell align="center">{data.updated_at}</TableCell>

                <Grid align="center"> 

                <Button onClick={()=>openEditedUsers(data,true)}>Edit</Button>
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

        <Dialog
            open={openCreateDialog}
            onClose={()=>SetCreateDialog(false)}
            fullWidth
        >
            <DialogContent>
            <TextField
                    value={createName}
                    onChange={(event)=>setCreateName(event.target.value)}
                    fullWidth
                    multiline={true}
                />    
            <TextField
                    value={createEmail}
                    onChange={(event)=>setCreateEmail(event.target.value)}
                    fullWidth
                    multiline={true}
                />

                <TextField
                    value={createPassword}
                    onChange={(event)=>setCreatePassword(event.target.value)}
                    fullWidth
                    multiline={true}
                />
            </DialogContent>
            <DialogActions>
                <Button onClick={saveCreateUsers}> Save </Button>
            </DialogActions>
        </Dialog>


        <Dialog
            open={openEditUsers}
            onClose={()=>setEditUser(false)}
            fullWidth
        >
            <DialogContent>
            <TextField
                    value={editName}
                    onChange={(event)=>setEditName(event.target.value)}
                    fullWidth
                    multiline={true}
                    
                />    
            <TextField
                    value={editEmail}
                    onChange={(event)=>setEditEmail(event.target.value)}
                    fullWidth
                    multiline={true}
                />

                <TextField
                    value={editPassword}
                    onChange={(event)=>setEditPassword(event.target.value)}
                    fullWidth
                    multiline={true}
                />
            </DialogContent>
            <DialogActions>
                <Button onClick={saveEditedUpdate}> Save </Button>
            </DialogActions>
        </Dialog>

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
                <Button onClick={deleteThisuser}> Delete</Button>
            </DialogActions>
        </Dialog>


</div>



    )
}

export default UsersIndex;

