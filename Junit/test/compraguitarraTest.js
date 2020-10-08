var chai =require('chai');
var assert = chai.assert;
var expect = chai.expect;
var compra = require('../compra-guitarra');

describe('Testing assert function: ',function(){
  describe('Check addTest Function', function(){
	it('Check the returned value using : assert,equal(value, value): ', function(){
		result= compra.addTest(4,1);
		assert.equal(result, 5);
	});
  });
})

describe('Testing assert function: ',function(){
  describe('Check addTest Function', function(){
	it('Check the returned value using : expect(result).to.be.a(value);: ', function(){
		result=compra.addTest(1,1);
		expect(result).to.equal(2);
	})
})
})