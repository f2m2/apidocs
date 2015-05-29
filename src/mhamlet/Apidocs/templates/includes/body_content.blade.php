
                        <a href="#" class="waypoint" name="{column-name}_{function}"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>{request-type}</h2></li>
                            <li><h3>{function}</h3></li>
                            <li>{request-uri}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">{endpoint-short-description}</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">{endpoint-long-description}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="{request-uri}" type="{request-type}">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                              {request-parameters}
                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="{request-type}"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>
