import { list } from 'postcss';
import React from 'react';
import ReactDOM from 'react-dom';

export default class ProductItem extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        error: null,
        product: props.product
      };
    }
  
 
  
    render() {
      const { error,  product } = this.state;
          console.log(product)
          console.log('dsads')
        return (
          <li>{product.name}</li>
        );
      }
  }