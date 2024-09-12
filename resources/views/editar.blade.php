<!-- Modal para editar cliente -->
<div class="modal fade" id="editarClienteModal" tabindex="-1" aria-labelledby="editarClienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarClienteLabel">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición de cliente -->
                <form id="editarClienteForm" action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Campo Empresa/Cliente -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Empresa_Cliente" class="form-label">Empresa/Cliente</label>
                                <input type="text" class="form-control" id="Empresa_Cliente" name="Empresa_Cliente" value="{{ $cliente->Empresa_Cliente }}" required>
                            </div>
                        </div>

                        <!-- Campo Correo Electrónico -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Correo_Electronico" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="Correo_Electronico" name="Correo_Electronico" value="{{ $cliente->Correo_Electronico }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Campo Estado -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="Estado" name="Estado" value="{{ $cliente->Estado }}" required>
                            </div>
                        </div>

                        <!-- Campo Teléfono -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{ $cliente->Telefono }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Campo DPI -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="DPI" class="form-label">DPI</label>
                                <input type="file" class="form-control" id="DPI" name="DPI">
                                @if ($cliente->DPI)
                                    <a href="{{ Storage::url($cliente->DPI) }}" target="_blank">
                                        <img src="{{ asset('images/001.png') }}" alt="PDF" width="20">
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Campo Patente -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Patente" class="form-label">Patente</label>
                                <input type="file" class="form-control" id="Patente" name="Patente">
                                @if ($cliente->Patente)
                                    <a href="{{ Storage::url($cliente->Patente) }}" target="_blank">
                                        <img src="{{ asset('images/001.png') }}" alt="PDF" width="20">
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Campo RTU -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="RTU" class="form-label">RTU</label>
                                <input type="file" class="form-control" id="RTU" name="RTU">
                                @if ($cliente->RTU)
                                    <a href="{{ Storage::url($cliente->RTU) }}" target="_blank">
                                        <img src="{{ asset('images/001.png') }}" alt="PDF" width="20">
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Campo Tipo de Cliente -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Tipo_Cliente" class="form-label">Tipo de Cliente</label>
                                <input type="text" class="form-control" id="Tipo_Cliente" name="Tipo_Cliente" value="{{ $cliente->Tipo_Cliente }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Campo Departamento -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Departamento" class="form-label">Departamento</label>
                                <input type="text" class="form-control" id="Departamento" name="Departamento" value="{{ $cliente->Departamento }}">
                            </div>
                        </div>

                        <!-- Campo Municipio -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Municipio" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="Municipio" name="Municipio" value="{{ $cliente->Municipio }}">
                            </div>
                        </div>
                    </div>

                    <!-- Campo Completar Dirección -->
                    <div class="mb-3">
                        <label for="Completar_Direccion" class="form-label">Completar Dirección</label>
                        <textarea class="form-control" id="Completar_Direccion" name="Completar_Direccion">{{ $cliente->Completar_Direccion }}</textarea>
                    </div>

                    <!-- Botones -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
