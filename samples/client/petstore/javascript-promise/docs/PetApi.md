# SwaggerPetstore.PetApi

All URIs are relative to *http://petstore.swagger.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPet**](PetApi.md#addPet) | **POST** /pet | Add a new pet to the store
[**deletePet**](PetApi.md#deletePet) | **DELETE** /pet/{petId} | Deletes a pet
[**findPetsByStatus**](PetApi.md#findPetsByStatus) | **GET** /pet/findByStatus | Finds Pets by status
[**findPetsByTags**](PetApi.md#findPetsByTags) | **GET** /pet/findByTags | Finds Pets by tags
[**getPetById**](PetApi.md#getPetById) | **GET** /pet/{petId} | Find pet by ID
[**updatePet**](PetApi.md#updatePet) | **PUT** /pet | Update an existing pet
[**updatePetWithForm**](PetApi.md#updatePetWithForm) | **POST** /pet/{petId} | Updates a pet in the store with form data
[**uploadFile**](PetApi.md#uploadFile) | **POST** /pet/{petId}/uploadImage | uploads an image


<a name="addPet"></a>
# **addPet**
> addPet(opts)

Add a new pet to the store



### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var opts = { 
  'body': new SwaggerPetstore.Pet() // Pet | Pet object that needs to be added to the store
};
apiInstance.addPet(opts).then(function() {
  console.log('API called successfully.');
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Pet**](Pet.md)| Pet object that needs to be added to the store | [optional] 

### Return type

null (empty response body)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

<a name="deletePet"></a>
# **deletePet**
> deletePet(petId, opts)

Deletes a pet



### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var petId = 789; // Integer | Pet id to delete

var opts = { 
  'apiKey': "apiKey_example" // String | 
};
apiInstance.deletePet(petId, opts).then(function() {
  console.log('API called successfully.');
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **Integer**| Pet id to delete | 
 **apiKey** | **String**|  | [optional] 

### Return type

null (empty response body)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

<a name="findPetsByStatus"></a>
# **findPetsByStatus**
> [Pet] findPetsByStatus(opts)

Finds Pets by status

Multiple status values can be provided with comma seperated strings

### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var opts = { 
  'status': ["available"] // [String] | Status values that need to be considered for filter
};
apiInstance.findPetsByStatus(opts).then(function(data) {
  console.log('API called successfully. Returned data: ' + data);
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**[String]**](String.md)| Status values that need to be considered for filter | [optional] [default to available]

### Return type

[**[Pet]**](Pet.md)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

<a name="findPetsByTags"></a>
# **findPetsByTags**
> [Pet] findPetsByTags(opts)

Finds Pets by tags

Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.

### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var opts = { 
  'tags': ["tags_example"] // [String] | Tags to filter by
};
apiInstance.findPetsByTags(opts).then(function(data) {
  console.log('API called successfully. Returned data: ' + data);
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | [**[String]**](String.md)| Tags to filter by | [optional] 

### Return type

[**[Pet]**](Pet.md)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

<a name="getPetById"></a>
# **getPetById**
> Pet getPetById(petId)

Find pet by ID

Returns a pet when ID &lt; 10.  ID &gt; 10 or nonintegers will simulate API error conditions

### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure API key authorization: api_key
var api_key = defaultClient.authentications['api_key'];
api_key.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//api_key.apiKeyPrefix = 'Token';

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var petId = 789; // Integer | ID of pet that needs to be fetched

apiInstance.getPetById(petId).then(function(data) {
  console.log('API called successfully. Returned data: ' + data);
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **Integer**| ID of pet that needs to be fetched | 

### Return type

[**Pet**](Pet.md)

### Authorization

[api_key](../README.md#api_key), [petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

<a name="updatePet"></a>
# **updatePet**
> updatePet(opts)

Update an existing pet



### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var opts = { 
  'body': new SwaggerPetstore.Pet() // Pet | Pet object that needs to be added to the store
};
apiInstance.updatePet(opts).then(function() {
  console.log('API called successfully.');
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Pet**](Pet.md)| Pet object that needs to be added to the store | [optional] 

### Return type

null (empty response body)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

<a name="updatePetWithForm"></a>
# **updatePetWithForm**
> updatePetWithForm(petId, opts)

Updates a pet in the store with form data



### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var petId = "petId_example"; // String | ID of pet that needs to be updated

var opts = { 
  'name': "name_example", // String | Updated name of the pet
  'status': "status_example" // String | Updated status of the pet
};
apiInstance.updatePetWithForm(petId, opts).then(function() {
  console.log('API called successfully.');
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **String**| ID of pet that needs to be updated | 
 **name** | **String**| Updated name of the pet | [optional] 
 **status** | **String**| Updated status of the pet | [optional] 

### Return type

null (empty response body)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, application/xml

<a name="uploadFile"></a>
# **uploadFile**
> uploadFile(petId, opts)

uploads an image



### Example
```javascript
var SwaggerPetstore = require('swagger-petstore');
var defaultClient = SwaggerPetstore.ApiClient.default;

// Configure OAuth2 access token for authorization: petstore_auth
var petstore_auth = defaultClient.authentications['petstore_auth'];
petstore_auth.accessToken = 'YOUR ACCESS TOKEN';

var apiInstance = new SwaggerPetstore.PetApi();

var petId = 789; // Integer | ID of pet to update

var opts = { 
  'additionalMetadata': "additionalMetadata_example", // String | Additional data to pass to server
  'file': "/path/to/file.txt" // File | file to upload
};
apiInstance.uploadFile(petId, opts).then(function() {
  console.log('API called successfully.');
}, function(error) {
  console.error(error);
});

```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **Integer**| ID of pet to update | 
 **additionalMetadata** | **String**| Additional data to pass to server | [optional] 
 **file** | **File**| file to upload | [optional] 

### Return type

null (empty response body)

### Authorization

[petstore_auth](../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, application/xml

