                        <a href="#" class="waypoint" name="introduction"></a>
                         <h1>Introduction</h1>
                        <p>This RESTful JSON API uses HTTP GET, POST, PUT, DELETE Requests to communicate with the System.</p>

                        <p>HTTP/1.1 Status Codes:</p>
                        <div>
                            <ul class="three-col-special">
                                <li>200  OK</li>
                                <li>201  Created</li>
                                <li>202  Accepted</li>
                                <li>204  No Content</li>
                                <li>301  Moved Permanently</li>
                                <li>302  Found</li>
                                <li>303  See Other</li>
                                <li>304  Not Modified</li>
                                <li>400  Bad Request</li>
                                <li>401  Unauthorized</li>
                                <li>402  Payment Required</li>
                                <li>403  Forbidden</li>
                                <li>404  Not Found</li>
                                <li>405  Method Not Allowed</li>
                                <li>406  Not Acceptable</li>
                                <li>408  Request Time-out</li>
                                <li>409  Conflict</li>
                                <li>410  Gone</li>
                                <li>411  Length Required</li>
                                <li>412  Precondition Failed</li>
                                <li>414  Request-URI Too Large</li>
                                <li>415  Unsupported Media Type</li>
                                <li>416  Requested range not satisfiable</li>
                                <li>500  Internal Server Error</li>
                                <li>501  Not Implemented</li>
                                <li>502  Bad Gateway</li>
                                <li>505  HTTP Version not supported</li>
                            </ul>
                        </div>
                    </BR></BR></BR>
                        <p>JSON Errors (HTTP/1.1 STATUS CODES 4xx &amp; 5xx)</p>
                        <pre class="prettyprint linenums">
{
  "success": false,
  "error": {
    "message": "The email field is required.",
    "code": 400
  }
}
                     </pre>

                      <p>Single Response (HTTP/1.1 STATUS CODES 2xx)</p>
                       <pre class="prettyprint linenums">
{
    "success": true,
    "data": {
        "id": 1,
    }
}

                       </pre>

                    <p>Collection Response (HTTP/1.1 STATUS CODES 2xx)</p>
                    <pre class="prettyprint linenums">
{
  "success": true,
  "items" : {
    "per_page" : 15,
    "from" : 1,
    "data" : [
      {
        "id" : 1,
      }
    ],
    "total" : 1,
    "current_page" : 1,
    "last_page" : 1,
    "to" : 1
  }
}
                    </pre>
