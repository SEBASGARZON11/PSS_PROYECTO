CREATE TABLE Clave (
  IdClave INT NOT NULL AUTO_INCREMENT,
  Jefe_IdJefe INT NOT NULL,
  Clave VARCHAR(20) NOT NULL,
  PRIMARY KEY(IdClave),
  INDEX Clave_FKIndex1(Jefe_IdJefe)
);

CREATE TABLE Cobro (
  IdCobro INT UNSIGNED NOT NULL AUTO_INCREMENT,
  Registro_IdRegistro INT UNSIGNED NOT NULL,
  TiempoTotal TIME NOT NULL,
  Cobro FLOAT NOT NULL,
  PRIMARY KEY(IdCobro),
  INDEX Cobro_FKIndex1(Registro_IdRegistro)
);

CREATE TABLE Empleado (
  IdEmpleado INT UNSIGNED NOT NULL AUTO_INCREMENT,
  TipoDeDocumento_IdTipDoc INT UNSIGNED NOT NULL,
  Nombre VARCHAR(20) NOT NULL,
  NumDoc INT UNSIGNED NOT NULL,
  FechaNac DATE NOT NULL,
  Celular INT UNSIGNED NOT NULL,
  PRIMARY KEY(IdEmpleado),
  INDEX Empleado_FKIndex1(TipoDeDocumento_IdTipDoc)
);

CREATE TABLE Horario (
  IdHorario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Horario VARCHAR(45) NOT NULL,
  PRIMARY KEY(IdHorario)
);

CREATE TABLE Jefe (
  IdJefe INT NOT NULL AUTO_INCREMENT,
  TipoDeDocumento_IdTipDoc INT UNSIGNED NOT NULL,
  Nombre VARCHAR(20) NOT NULL,
  NumDoc INT NOT NULL,
  PRIMARY KEY(IdJefe),
  INDEX Jefe_FKIndex1(TipoDeDocumento_IdTipDoc)
);

CREATE TABLE Registro (
  IdRegistro INT UNSIGNED NOT NULL AUTO_INCREMENT,
  TipoVehiculo_IdTipVehi INT UNSIGNED NOT NULL,
  Empleado_IdEmpleado INT UNSIGNED NOT NULL,
  FechaIngreso DATETIME NOT NULL,
  FechaSalida DATETIME NULL,
  HoraIngreso DATETIME NOT NULL,
  HoraSalida DATETIME NULL,
  Placa VARCHAR(6) NOT NULL,
  PRIMARY KEY(IdRegistro),
  INDEX Registro_FKIndex1(Empleado_IdEmpleado),
  INDEX Registro_FKIndex3(TipoVehiculo_IdTipVehi)
);

CREATE TABLE Rol (
  IdRol INT UNSIGNED NOT NULL AUTO_INCREMENT,
  Rol VARCHAR(20) NULL,
  PRIMARY KEY(IdRol)
);

CREATE TABLE Tarifa (
  IdTarifa INT UNSIGNED NOT NULL AUTO_INCREMENT,
  TipoVehiculo_IdTipVehi INT UNSIGNED NOT NULL,
  Tarifa INT UNSIGNED NULL,
  PRIMARY KEY(IdTarifa),
  INDEX Tarifa_FKIndex1(TipoVehiculo_IdTipVehi)
);

CREATE TABLE TipoDeDocumento (
  IdTipDoc INT UNSIGNED NOT NULL AUTO_INCREMENT,
  TipoDocumento VARCHAR(25) NULL,
  PRIMARY KEY(IdTipDoc)
);

CREATE TABLE TipoVehiculo (
  IdTipVehi INT UNSIGNED NOT NULL AUTO_INCREMENT,
  TipoVehiculo VARCHAR(20) NOT NULL,
  PRIMARY KEY(IdTipVehi)
);

CREATE TABLE Turno (
  IdTurno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Horario_IdHorario INTEGER UNSIGNED NOT NULL,
  Empleado_IdEmpleado INT UNSIGNED NOT NULL,
  Fecha DATETIME NULL,
  PRIMARY KEY(IdTurno),
  INDEX Turno_FKIndex1(Empleado_IdEmpleado),
  INDEX Turno_FKIndex2(Horario_IdHorario)
);


