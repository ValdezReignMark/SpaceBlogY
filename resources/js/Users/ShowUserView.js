import { CircularProgress, Paper, Table, TableCell, Grid, Toolbar, Typography, Avatar, TableContainer, TableHead, TableRow, TableBody } from '@material-ui/core';
import { Add as AddIcon, RowingSharp } from '@material-ui/icons';
import React, { useEffect, useState } from 'react';
import {  makeStyles  } from '@material-ui/core/styles';
import ReactDOM from 'react-dom';
import Header from '../HeaderAndFooter/Header';
import { contains } from 'jquery';
import api from '../config/apisauce';
import ButtonGroup from '@material-ui/core/ButtonGroup';
import  Button from '@material-ui/core/Button';
import  DeleteIcon  from '@material-ui/icons/Delete';
import  EditIcon  from '@material-ui/icons/Edit';
import  CreateIcon  from '@material-ui/icons/Create';
import Checkbox  from '@material-ui/icons/Checkbox';
import {FormControlLabel}  from '@material-ui/core';
import SaveIcon from '@material-ui/icons/Save';




// 

 



const ShowUserView = () => {
  const [Users, setUsersData] = useState([]);

  const fetchUsersData = () => {
    api.get('/showUser').then((result) => {
      console.log('showUser', result.data);
      setUsersData(result.data);
    });
  }


  useEffect(() => {
    fetchUsersData();
  }, []);



  return(
    <div>
      <Header/>
      <Grid container>
            {/* {
                blogPosts && (
                    <pre>
                        { JSON.stringify(blogPosts, null, 2) }
                    </pre>
                )
            } */}
                  <Button
                          component="Button"
                          startIcon={<CreateIcon />}
                          size="Large"
                          variant="contained"
                          
                          >Create                            
                   </Button>
        <TableContainer component={Paper}>
            <Table className="#" aria-label="simple table">
            <TableHead>
                <TableRow>
                <TableCell align="right">name</TableCell>
                <TableCell align="right">Email</TableCell>
                </TableRow>
            </TableHead>
            {
                Users.length != 0 ?
                Users.map((data) => {
                   return (
                 
                    <TableRow key={data.id}>
                        {/* <TableCell component="th" scope="row">
                        {data.title}
                        </TableCell> */}
                        <TableCell align="right">{data.name}</TableCell>
                        <TableCell align="right">{data.email}</TableCell>
                     <Grid container>
                        <ButtonGroup variant="contained" Color="primary" >
                        <CheckBoxX/>
                          <Button 
                            onClick={() => { alert('Deleted Joke')}}
                            startIcon={<DeleteIcon />}
                          >
                            Delete                            
                          </Button>

                          <Button
                            startIcon={<EditIcon />}
                            onClick={() => { alert('Will edit using a function?')}}
                          >Edit                            
                          </Button>
                        </ButtonGroup>
                        </Grid>
                    </TableRow>
                   ) 
                })
                :
                undefined
            }
      


        
            </Table>


        </TableContainer>
        </Grid>
     
    </div>






  )
    
  }
export default ShowUserView;

if (document.getElementById('showuserview')) {
  ReactDOM.render(<ShowUserView />, document.getElementById('showuserview'));
}








// function CheckBoxX() {
//   const [checked, setChecked ] = React.useState(false)
//   return (
//     <FormControlLabel
//       control={<Checkbox
//       checked={checked}
//       icon={<DeleteIcon/>}
//       checkedIcon={<SaveIcon />}
//       onChange={(e) => setChecked(e.target.checked)}
//       inputProps={{
//         'arial-label': 'secondary checkbox'
//       }}

//       />}
//       label='Check me Out'
//     />
//   )
// }




// function DeleteUser() {
//   const [DeleteUser, UpdatedUserTable] = useState();

//   const fetchUpdatedUserTable = () => {
//     web.get('/user/delete' , $id).then((result) => {
//       console.log('/user/delete', result.data);
//       UpdatedUserTable(result.data);
//     });
//   }

//  useEffect(() => {
//    fetchUpdatedUserData();
//  }, []);


//   return(
//     <div>
//     </div>
 

//   )
// }
