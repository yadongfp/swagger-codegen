package io.swagger.api;

import io.swagger.model.*;

import io.swagger.model.User;
import java.util.List;

import io.swagger.annotations.Api;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import io.swagger.annotations.ApiResponses;
import io.swagger.annotations.Authorization;
import io.swagger.annotations.AuthorizationScope;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestHeader;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestPart;
import org.springframework.web.multipart.MultipartFile;

import java.util.List;

import static org.springframework.http.MediaType.*;

@Controller
@RequestMapping(value = "/user", produces = {APPLICATION_JSON_VALUE})
@Api(value = "/user", description = "the user API")
@javax.annotation.Generated(value = "class io.swagger.codegen.languages.SpringMVCServerCodegen", date = "2016-04-28T15:08:37.024+02:00")
public class UserApi {

  @ApiOperation(value = "Create user", notes = "This can only be done by the logged in user.", response = Void.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 200, message = "successful operation", response = Void.class) })
  @RequestMapping(value = "",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.POST)
  public ResponseEntity<Void> createUser(

@ApiParam(value = "Created user object"  ) @RequestBody User body
)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<Void>(HttpStatus.OK);
  }


  @ApiOperation(value = "Creates list of users with given input array", notes = "", response = Void.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 200, message = "successful operation", response = Void.class) })
  @RequestMapping(value = "/createWithArray",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.POST)
  public ResponseEntity<Void> createUsersWithArrayInput(

@ApiParam(value = "List of user object"  ) @RequestBody List<User> body
)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<Void>(HttpStatus.OK);
  }


  @ApiOperation(value = "Creates list of users with given input array", notes = "", response = Void.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 200, message = "successful operation", response = Void.class) })
  @RequestMapping(value = "/createWithList",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.POST)
  public ResponseEntity<Void> createUsersWithListInput(

@ApiParam(value = "List of user object"  ) @RequestBody List<User> body
)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<Void>(HttpStatus.OK);
  }


  @ApiOperation(value = "Delete user", notes = "This can only be done by the logged in user.", response = Void.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 400, message = "Invalid username supplied", response = Void.class),
    @io.swagger.annotations.ApiResponse(code = 404, message = "User not found", response = Void.class) })
  @RequestMapping(value = "/{username}",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.DELETE)
  public ResponseEntity<Void> deleteUser(
@ApiParam(value = "The name that needs to be deleted",required=true ) @PathVariable("username") String username

)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<Void>(HttpStatus.OK);
  }


  @ApiOperation(value = "Get user by user name", notes = "", response = User.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 200, message = "successful operation", response = User.class),
    @io.swagger.annotations.ApiResponse(code = 400, message = "Invalid username supplied", response = User.class),
    @io.swagger.annotations.ApiResponse(code = 404, message = "User not found", response = User.class) })
  @RequestMapping(value = "/{username}",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.GET)
  public ResponseEntity<User> getUserByName(
@ApiParam(value = "The name that needs to be fetched. Use user1 for testing. ",required=true ) @PathVariable("username") String username

)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<User>(HttpStatus.OK);
  }


  @ApiOperation(value = "Logs user into the system", notes = "", response = String.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 200, message = "successful operation", response = String.class),
    @io.swagger.annotations.ApiResponse(code = 400, message = "Invalid username/password supplied", response = String.class) })
  @RequestMapping(value = "/login",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.GET)
  public ResponseEntity<String> loginUser(@ApiParam(value = "The user name for login") @RequestParam(value = "username", required = false) String username


,
    @ApiParam(value = "The password for login in clear text") @RequestParam(value = "password", required = false) String password


)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<String>(HttpStatus.OK);
  }


  @ApiOperation(value = "Logs out current logged in user session", notes = "", response = Void.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 200, message = "successful operation", response = Void.class) })
  @RequestMapping(value = "/logout",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.GET)
  public ResponseEntity<Void> logoutUser()
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<Void>(HttpStatus.OK);
  }


  @ApiOperation(value = "Updated user", notes = "This can only be done by the logged in user.", response = Void.class)
  @io.swagger.annotations.ApiResponses(value = { 
    @io.swagger.annotations.ApiResponse(code = 400, message = "Invalid user supplied", response = Void.class),
    @io.swagger.annotations.ApiResponse(code = 404, message = "User not found", response = Void.class) })
  @RequestMapping(value = "/{username}",
    produces = { "application/json", "application/xml" }, 
    
    method = RequestMethod.PUT)
  public ResponseEntity<Void> updateUser(
@ApiParam(value = "name that need to be deleted",required=true ) @PathVariable("username") String username

,
    

@ApiParam(value = "Updated user object"  ) @RequestBody User body
)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<Void>(HttpStatus.OK);
  }

}
