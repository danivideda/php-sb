<?php

require 'databases/Connection.php';
require 'databases/QueryBuilder.php';

return new QueryBuilder(Connection::make());