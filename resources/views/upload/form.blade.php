      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="nombreArchivo">nombre Archivo</label>
                            <input name="nombreArchivo" value="{{ isset($archivo->nombreArchivo)?$archivo->nombreArchivo:''}}" type="text" id="nombreArchivo" class="form-control" />
                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="url">url del iframe</label>
                            <input type="text" value="{{ isset($archivo->url)? $archivo->url:'' }}" name="url" id="url" class="form-control" />
                            
                        </div>
                    </div>
                    
                </div>

                <!-- Email input -->
                <div class="row mb-4">

                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="imagen">descripcion</label><br>
                            <input type="text" id="descripcion" name="descripcion" value="{{ isset($archivo->descripcion)?$archivo->descripcion:''}}" class="form-control"/>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                        
                            <div class="form-group">

                              


                                <label for="exampleFormControlSelect1">Seleccione una Categoria</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="category">
                                    @if((isset($Categorias) && isset($archivo->category)))

                                        @foreach($Categorias as  $clave => $valor)
                                            <option value="{{ $clave }}" {{ ($clave == $archivo->category) ?         'selected' : '' }}>
                                                {{ $valor }}
                                            </option>
                                                

                                        @endforeach
                                        
                                    @else

                                        @foreach($Categorias as  $clave => $valor)

                                        
                                            <option value="{{ $clave }}" >
                                                {{ $valor }}
                                            </option>
                                                

                                        @endforeach


                                    @endif

                                 
                                </select>
                            </div>
                          
                        </div>
                    </div>

                  
                </div>

                

                <!-- Password input -->
                <div class="form-row mb-4">

                <div class="col">
                        <div class="form-outline">
                        
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccione una Plataforma</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="plataforma">
                                    @if((isset($plataforma) && isset($archivo->plataforma)))

                                        @foreach($plataforma as  $clave => $valor)

                                            <option value="{{ $clave }}" {{ ($clave == $archivo->plataforma) ?         'selected' : '' }}>
                                                {{ $valor }}
                                            </option>
                                                

                                        @endforeach
                                        
                                    @else

                                        @foreach($plataforma as  $clave => $valor)

                                            <option value="{{ $clave }}" >
                                                {{ $valor }}
                                            </option>
                                                

                                        @endforeach


                                    @endif

                                 
                                </select>
                            </div>
                          
                        </div>
                    </div>

                   
                  
                </div>
            
   <!-- Submit button -->
