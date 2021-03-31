import React from 'react';
import ReactDOM from 'react-dom';
import ProductItem from './../catalog/ProductItem';
export default class Header extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        items: []
      };
    }
  
    componentDidMount() {
      fetch("http://127.0.0.1:8000/api/v1/products")
        .then(res => res.json())
        .then(
          (result) => {

            this.setState({
              isLoaded: true,
              products: result
            });
          },
          // Примечание: важно обрабатывать ошибки именно здесь, а не в блоке catch(),
          // чтобы не перехватывать исключения из ошибок в самих компонентах.
          (error) => {
            this.setState({
              isLoaded: true,
              error
            });
          }
        )
    }
  
    render() {
      const { error, isLoaded, products } = this.state;
      if (error) {
        return <div>Ошибка: {error.message}</div>;
      } else if (!isLoaded) {
        return <div>Загрузка...</div>;
      } else {
        return (
          <ul>
            {products.data.map((item) =>
             <ProductItem product = {item} key = {item.id}></ProductItem>
             )}
          </ul>
        );
      }
    }
  }