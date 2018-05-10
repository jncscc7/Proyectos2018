/*SUMA DE STOCK-INGRESO*/
DELIMITER //
CREATE TRIGGER tr_updStockIngreso AFTER INSERT ON detalle_ingresos FOR EACH ROW
BEGIN
    UPDATE articulos SET stock = stock + NEW.cantidad
    WHERE articulos.id = NEW.idarticulo;
END
//
DELIMITER ;

/*RESTA DE STOCK-INGRESO*/
DELIMITER //
CREATE TRIGGER tr_updStockIngresoAnular AFTER UPDATE ON ingresos FOR EACH ROW 
BEGIN
  UPDATE articulos a
    JOIN detalle_ingresos di
      ON di.idarticulo = a.id
     AND di.idingreso = new.id
     set a.stock = a.stock - di.cantidad;
end;
//
DELIMITER ;


/*RESTA DE STOCK - VENTA*/
DELIMITER //
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `detalle_ventas`
 FOR EACH ROW BEGIN
 UPDATE articulos SET stock = stock - NEW.cantidad 
 WHERE articulos.id = NEW.idarticulo;
end;
//
DELIMITER;

/*RESTA DE STOCK - VENTA*/
DELIMITER //
CREATE TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas FOR EACH ROW 
BEGIN
  UPDATE articulos a
    JOIN detalle_ventas dv
      ON dv.idarticulo = a.id
     AND dv.idventa= new.id
     set a.stock = a.stock + dv.cantidad;
end;
//
DELIMITER ;
